export function applyCalc(root) {
  const resetNodes = Array.from(root.querySelectorAll('[data-calc-reset]'))
  const inputs = root.querySelectorAll('input')
  const repairCost = root.querySelector('[data-calc-repair-cost]')
  const materialsCost = root.querySelector('[data-calc-materials-cost]')
  const area = root.querySelector('[name="area"]')

  const updateCosts = () => {
    const checkeds = root.querySelectorAll(
      '[name="house-type"]:checked,[name="room-count"]:checked,[name="repair-type"]:checked'
    )
    const areaValue = parseInt(area.value)

    let repairFixed = 0
    let repairRelative = 1
    let materialsFixed = 0
    let materialsRelative = 1

    checkeds.forEach((checked) => {
      if (checked.dataset.calcRepairPrice.includes('%')) {
        repairRelative += parseInt(checked.dataset.calcRepairPrice.replace('%', '')) / 100 - 1
      } else {
        repairFixed += parseInt(checked.dataset.calcRepairPrice)
      }
      if (checked.dataset.calcMaterialsPrice.includes('%')) {
        materialsRelative += parseInt(checked.dataset.calcMaterialsPrice.replace('%', '')) / 100 - 1
      } else {
        materialsFixed += parseInt(checked.dataset.calcMaterialsPrice)
      }
    })

    repairCost.innerHTML = (areaValue * repairRelative * repairFixed).toLocaleString('ru-RU', {
      style: 'currency',
      currency: 'RUB',
      maximumFractionDigits: 0
    })

    materialsCost.innerHTML = (areaValue * materialsRelative * materialsFixed).toLocaleString(
      'ru-RU',
      {
        style: 'currency',
        currency: 'RUB',
        maximumFractionDigits: 0
      }
    )
  }

  updateCosts()

  inputs.forEach((input) => input.addEventListener('input', updateCosts))

  resetNodes.forEach((resetNode) => {
    resetNode.addEventListener('click', () => {
      root.removeAttribute('data-calc-success')
      // отключил, потому что прикрепленные файлы нужно удалять вручную, как и обновлять шкалу площади
      // root.reset()
      // updateCosts()
    })
  })

  root.addEventListener('submit', (e) => {
    e.preventDefault()
    var formData = new FormData(root)
    // output as an object
    console.log(Object.fromEntries(formData))
    // ...or iterate through the name-value pairs
    for (var pair of formData.entries()) {
      console.log(pair[0] + ': ' + pair[1])
    }

    root.setAttribute('data-calc-success', '')
  })
}

export function initCalc() {
  const nodes = Array.from(document.querySelectorAll('[data-calc]'))
  nodes.forEach(applyCalc)
}
