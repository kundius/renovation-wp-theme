export function applyCalc(root) {
  const pricesNode = root.querySelector('[data-calc-prices]')
  const prices = pricesNode ? JSON.parse(pricesNode.textContent) : []
  const repairCost = root.querySelector('[data-calc-repair-cost]')
  const materialsCost = root.querySelector('[data-calc-materials-cost]')
  const area = root.querySelector('[name="area"]')

  const format = (value) =>
    value.toLocaleString('ru-RU', {
      style: 'currency',
      currency: 'RUB',
      maximumFractionDigits: 0,
    }).replace('₽', 'руб.')

  const toNumber = (value) => {
    const cleaned = String(value).replace(',', '.').replace(/[^\d.]/g, '')
    return parseFloat(cleaned)
  }

  const updateCosts = () => {
    const areaValue = parseInt(area.value, 10) || 0

    const selected = {}
    root.querySelectorAll('[data-calc-dimension]').forEach((input) => {
      if (input.checked) {
        selected[input.dataset.calcDimension] = input.value.trim()
      }
    })

    const row = prices.find((r) =>
      selected.house_type !== undefined &&
      selected.rooms !== undefined &&
      selected.repair_type !== undefined &&
      String(r.house_type).trim() === selected.house_type &&
      String(r.rooms).trim() === selected.rooms &&
      String(r.repair_type).trim() === selected.repair_type
    )

    if (row) {
      const repair = toNumber(row.repair_price) || 0
      const materials = toNumber(row.materials_price) || 0
      repairCost.innerHTML = format(areaValue * repair)
      materialsCost.innerHTML = format(areaValue * materials)
    } else {
      repairCost.innerHTML = '—'
      materialsCost.innerHTML = '—'
    }
  }

  updateCosts()

  root.querySelectorAll('input').forEach((input) => {
    input.addEventListener('input', updateCosts)
    input.addEventListener('change', updateCosts)
  })
}

export function initCalc() {
  const nodes = Array.from(document.querySelectorAll('[data-calc]'))
  nodes.forEach(applyCalc)
}
