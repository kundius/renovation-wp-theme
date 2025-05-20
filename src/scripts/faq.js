export function applyFaq(root) {
  const items = root.querySelectorAll('[data-faq-item]')
  const triggers = root.querySelectorAll('[data-faq-trigger]')
  // const areaInput = root.querySelector('[name="area"]')
  // const priceOutput = root.querySelector('[data-hero-form-price-output]')
  console.log(triggers)
  const show = (e) => {
    const parent = e.target.closest('[data-faq-item]')
    items.forEach((item) => {
      if (item == parent) {
        item.classList.toggle('active')
      } else {
        item.classList.remove('active')
      }
    })
    //   const typeInput = Array.from(typeInputs).find((el) => el.checked)
    //   priceOutput.innerHTML = (
    //     (typeInput ? typeInput.dataset.heroFormTypePrice : 0) * areaInput.value
    //   ).toLocaleString('ru-RU', {
    //     style: 'currency',
    //     currency: 'RUB',
    //     maximumFractionDigits: 0
    //   })
  }
  // document.addEventListener('DOMContentLoaded', updatePrice)
  // areaInput.addEventListener('input', updatePrice)
  triggers.forEach((trigger) => trigger.addEventListener('click', show))
}

export function initFaq() {
  const nodes = Array.from(document.querySelectorAll('[data-faq]'))
  nodes.forEach(applyFaq)
}
