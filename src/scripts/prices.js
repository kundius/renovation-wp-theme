const exportPriceList = (payload) => {
  const fd = new FormData()
  fd.append('action', 'calc_export_price')
  fd.append('nonce', window.theme_ajax.calc_export_nonce)
  fd.append('data', JSON.stringify(payload))

  fetch(window.theme_ajax.url, {
    method: 'POST',
    body: fd,
    credentials: 'same-origin'
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error('Network response was not ok')
      }
      return response.blob()
    })
    .then((blob) => {
      const url = URL.createObjectURL(blob)
      const a = document.createElement('a')
      a.href = url
      a.download = 'pricelist.xlsx'
      document.body.appendChild(a)
      a.click()
      document.body.removeChild(a)
      URL.revokeObjectURL(url)
    })
    .catch((error) => {
      console.error('Ошибка выгрузки прайс-листа:', error)
    })
}

const formatPrice = (value) => {
  return value.toLocaleString('ru-RU', {
    style: 'currency',
    currency: 'RUB',
    maximumFractionDigits: 0
  }).replace('₽', 'руб.')
}

export function applyPrices(root) {
  const inputs = Array.from(root.querySelectorAll('input'))
  const toggleTabsShow = root.querySelector('[data-prices-tabs-show]')
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

      if (rowQuantityNode) {
        rowQuantity = parseInt(rowQuantityNode.value)
      }

      let rowPrice = rowPriceNode.dataset.pricesRowPrice ? parseInt(rowPriceNode.dataset.pricesRowPrice) : null
      let rowCost = rowPrice !== null ? rowPrice * rowQuantity : null

      // увеличить стоимость строки
      rowPriceNode.innerHTML = rowCost !== null ? formatPrice(rowCost) : ''

      if (rowEnableNode.checked) {
        row.setAttribute('data-prices-row-active', '')

        // увеличить итоговую стоимость
        if (rowCost !== null) {
          cost += rowCost
        }

        // добавить в прайс запись
        if (rowPaneNode) {
          if (!priceList[rowPaneNode.dataset.pricesPane]) {
            priceList[rowPaneNode.dataset.pricesPane] = []
          }
          priceList[rowPaneNode.dataset.pricesPane].push({
            name: rowNameNode.textContent.trim(),
            quantity: rowCost !== null ? rowQuantity : '',
            units: rowUnitsNode.textContent.trim(),
            price: rowCost !== null ? rowCost : ''
          })
        }
      } else {
        row.removeAttribute('data-prices-row-active')
      }
    })

    // пометить вкладку измененной
    tabs.forEach((tab) => {
      if (priceList[tab.dataset.pricesTab]) {
        tab.classList.add('dirty')
      } else {
        tab.classList.remove('dirty')
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

  // собрать массив для xlsx, запустить выгрузку на сервер
  const download = () => {
    const payload = {
      header: ['Наименование работ', 'Количество', 'Ед. изм', 'Цена'],
      sections: [],
      total: cost
    }

    Object.entries(priceList).forEach(([key, values]) => {
      payload.sections.push({
        name: key,
        items: values.map((v) => ({
          name: v.name,
          quantity: (v.quantity === '' || v.quantity == null) ? null : Number(v.quantity),
          units: v.units,
          price: (v.price === '' || v.price == null) ? null : Number(v.price)
        }))
      })
    })

    exportPriceList(payload)
  }

  document.addEventListener('DOMContentLoaded', calc)
  downloadButton.addEventListener('click', download)
  inputs.forEach((input) => input.addEventListener('input', calc))
  tabs.forEach((tab) => tab.addEventListener('click', () => showTab(tab.dataset.pricesTab)))

  if (toggleTabsShow) {
    toggleTabsShow.addEventListener('click', () => {
      const labelNew = toggleTabsShow.dataset.pricesTabsShowAlt
      const labelOld = toggleTabsShow.textContent
      toggleTabsShow.dataset.pricesTabsShowAlt = labelOld
      toggleTabsShow.textContent = labelNew

      if (root.hasAttribute('data-prices-expanded')) {
        root.removeAttribute('data-prices-expanded')
      } else {
        root.setAttribute('data-prices-expanded', '')
      }
    })
  }
}

export function initPrices() {
  const nodes = Array.from(document.querySelectorAll('[data-prices]'))
  nodes.forEach(applyPrices)
}
