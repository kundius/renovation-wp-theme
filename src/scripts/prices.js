export function applyPrices(root) {
  const inputs = Array.from(root.querySelectorAll('input'))
  const tabs = Array.from(root.querySelectorAll('[data-prices-tab]'))
  const panes = Array.from(root.querySelectorAll('[data-prices-pane]'))
  const rows = Array.from(root.querySelectorAll('[data-prices-row]'))
  const downloadButton = root.querySelector('[data-prices-download]')
  const total = root.querySelector('[data-prices-total]')

  let priceList = {}

  const calc = () => {
    let cost = 0
    rows.forEach((row) => {
      const rowEnableNode = row.querySelector('[data-prices-row-enable]')
      const rowPriceNode = row.querySelector('[data-prices-row-price]')
      const rowQuantityNode = row.querySelector('[data-prices-row-quantity]')

      if (!rowEnableNode || !rowPriceNode) return

      if (!rowEnableNode.checked) return

      let rowPrice = parseInt(rowPriceNode.dataset.pricesRowPrice)
      let rowQuantity = 1

      if (rowQuantityNode) {
        rowQuantity = parseInt(rowQuantityNode.value)
      }

      cost += rowPrice * rowQuantity
    })

    total.innerHTML = cost.toLocaleString('ru-RU', {
      style: 'currency',
      currency: 'RUB',
      maximumFractionDigits: 0
    })
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

  const download = () => {

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
