export function applyHeroForm(root) {
  const typeInputs = root.querySelectorAll('[name="type"]')
  const areaInput = root.querySelector('[name="area"]')
  const priceOutput = root.querySelector('[data-hero-form-price-output]')

  const updatePrice = () => {
    const typeInput = Array.from(typeInputs).find((el) => el.checked)
    priceOutput.innerHTML = (
      (typeInput ? typeInput.dataset.heroFormTypePrice : 0) * areaInput.value
    ).toLocaleString('ru-RU', {
      style: 'currency',
      currency: 'RUB',
      maximumFractionDigits: 0
    })
  }

  document.addEventListener('DOMContentLoaded', updatePrice)
  areaInput.addEventListener('input', updatePrice)
  typeInputs.forEach((typeInput) => typeInput.addEventListener('input', updatePrice))
}

export function initHeroForm() {
  const nodes = Array.from(document.querySelectorAll('[data-hero-form]'))
  nodes.forEach(applyHeroForm)
}
