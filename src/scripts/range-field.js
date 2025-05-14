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

export function applyRangeField(root) {
  const display = root.querySelector('[data-range-field-display]')
  const input = root.querySelector('[data-range-field-input]')
  const plus = root.querySelector('[data-range-field-plus]')
  const minus = root.querySelector('[data-range-field-minus]')

  const update = () => {
    display.innerHTML = display.dataset.rangeFieldDisplay
      ? display.dataset.rangeFieldDisplay.replace('#', input.value)
      : input.value
    input.style.setProperty(
      '--progress',
      `${Math.round((input.value / input.max - input.min) * 100)}%`
    )
  }

  document.addEventListener('DOMContentLoaded', update)
  input.addEventListener('input', update)

  setupStepButton(plus, () => stepUp(input))
  setupStepButton(minus, () => stepDown(input))
}

export function initRangeField() {
  const nodes = Array.from(document.querySelectorAll('[data-range-field]'))
  nodes.forEach(applyRangeField)
}
