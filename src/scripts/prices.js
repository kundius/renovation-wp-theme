const downloadPriceList = (data) => {
  // Create a Blob with the CSV data and type
  const blob = new Blob([data], { type: 'text/csv' })

  // Create a URL for the Blob
  const url = URL.createObjectURL(blob)

  // Create an anchor tag for downloading
  const a = document.createElement('a')

  // Set the URL and download attribute of the anchor tag
  a.href = url
  a.download = 'pricelist.csv'

  // Trigger the download by clicking the anchor tag
  a.click()
}

const formatPrice = (value) => {
  return value.toLocaleString('ru-RU', {
    style: 'currency',
    currency: 'RUB',
    maximumFractionDigits: 0
  })
}

export function applyPrices(root) {
  const inputs = Array.from(root.querySelectorAll('input'))
  const tabs = Array.from(root.querySelectorAll('[data-prices-tab]'))
  const panes = Array.from(root.querySelectorAll('[data-prices-pane]'))
  const rows = Array.from(root.querySelectorAll('[data-prices-row]'))
  const downloadButton = root.querySelector('[data-prices-download]')
  const total = root.querySelector('[data-prices-total]')

  let cost = 0
  let priceList = {}

  const calc = () => {
    cost = 0
    priceList = {}

    rows.forEach((row) => {
      const rowEnableNode = row.querySelector('[data-prices-row-enable]')
      const rowPriceNode = row.querySelector('[data-prices-row-price]')
      const rowQuantityNode = row.querySelector('[data-prices-row-quantity]')
      const rowNameNode = row.querySelector('[data-prices-row-name]')
      const rowUnitsNode = row.querySelector('[data-prices-row-units]')
      const rowPaneNode = row.closest('[data-prices-pane]')

      if (!rowEnableNode || !rowPriceNode) return

      let rowQuantity = 1
      let rowPrice = parseInt(rowPriceNode.dataset.pricesRowPrice)

      if (rowQuantityNode) {
        rowQuantity = parseInt(rowQuantityNode.value)
      }

      // увеличить стоимость строки
      rowPriceNode.innerHTML = formatPrice(rowPrice * rowQuantity)

      if (rowEnableNode.checked) {
        // увеличить итоговую стоимость
        cost += rowPrice * rowQuantity

        // добавить в прайс запись
        if (rowPaneNode) {
          if (!priceList[rowPaneNode.dataset.pricesPane]) {
            priceList[rowPaneNode.dataset.pricesPane] = []
          }
          priceList[rowPaneNode.dataset.pricesPane].push({
            name: rowNameNode.textContent.trim(),
            quantity: rowQuantity,
            units: rowUnitsNode.textContent.trim(),
            price: rowPrice * rowQuantity
          })
        }

        // пометить вкладку измененной
        tabs.forEach((tab) => {
          if (priceList[tab.dataset.pricesTab]) {
            tab.classList.add('dirty')
          } else {
            tab.classList.remove('dirty')
          }
        })
      }
    })

    total.innerHTML = formatPrice(cost)
  }

  const showTab = (name) => {
    panes.forEach((pane) => {
      if (pane.dataset.pricesPane === name) {
        pane.classList.add('active')
      } else {
        pane.classList.remove('active')
      }
    })
    tabs.forEach((tab) => {
      if (tab.dataset.pricesTab === name) {
        tab.classList.add('active')
      } else {
        tab.classList.remove('active')
      }
    })
  }

  // собрать массив для csv, запустить загрузку файла
  const download = () => {
    const data = [['Наименование работ', 'Количество', 'Ед. изм', 'Цена']]
    Object.entries(priceList).forEach(([key, values]) => {
      data.push([key, '', '', ''])
      values.forEach((value) => {
        data.push([value.name, value.quantity, value.units, formatPrice(value.price)])
      })
    })
    data.push(['', '', '', formatPrice(cost)])
    downloadPriceList(data.join('\n'))
  }

  document.addEventListener('DOMContentLoaded', calc)
  downloadButton.addEventListener('click', download)
  inputs.forEach((input) => input.addEventListener('input', calc))
  tabs.forEach((tab) => tab.addEventListener('click', () => showTab(tab.dataset.pricesTab)))
}

export function initPrices() {
  const nodes = Array.from(document.querySelectorAll('[data-prices]'))
  nodes.forEach(applyPrices)
}
