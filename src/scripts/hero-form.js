function setupStepButton(button, stepAction) {
  let timeout = null
  let interval = null

  const startPress = () => {
    timeout = setTimeout(() => {
      interval = setInterval(() => {
        stepAction()
      }, 100)
    }, 500)
  }

  const stopPress = () => {
    setTimeout(() => {
      if (timeout) {
        clearTimeout(timeout)
        timeout = null
      }
      if (interval) {
        clearInterval(interval)
        interval = null
      }
    }, 0)
  }

  button.addEventListener('mousedown', startPress)
  button.addEventListener('mouseleave', stopPress)
  button.addEventListener('mouseup', stopPress)
  button.addEventListener('click', () => {
    if (!interval) {
      stepAction()
    }
  })
}

function stepUp(input) {
  input.stepUp(1)
  input.dispatchEvent(new Event('input'))
}

function stepDown(input) {
  input.stepDown(1)
  input.dispatchEvent(new Event('input'))
}

export function initHeroForm() {
  const root = document.querySelector('[data-hero-form]')

  if (!root) return

  const typeInputs = root.querySelectorAll('[name="type"]')
  const areaInput = root.querySelector('[name="area"]')
  const areaOutput = root.querySelector('[data-hero-form-area-output]')
  const areaPlus = root.querySelector('[data-hero-form-area-plus]')
  const areaMinus = root.querySelector('[data-hero-form-area-minus]')
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

  const updateArea = () => {
    areaOutput.innerHTML = `${areaInput.value} м<sup>2</sup>`
    areaInput.style.setProperty(
      '--progress',
      `${Math.round((areaInput.value / areaInput.max - areaInput.min) * 100)}%`
    )
    updatePrice()
  }

  updateArea()

  areaInput.addEventListener('input', updateArea)
  typeInputs.forEach((typeInput) => typeInput.addEventListener('input', updatePrice))

  setupStepButton(areaPlus, () => stepUp(areaInput))
  setupStepButton(areaMinus, () => stepDown(areaInput))
}
