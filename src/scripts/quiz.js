export function initQuiz() {
  const root = document.querySelector('[data-quiz]')

  if (!root) return

  let step = 0

  const setStep = (n) => {
    step = n
    numberNodes.forEach((numberNode, i) => {
      if (i <= step) {
        numberNode.classList.add('quiz__progress__number_active')
      } else {
        numberNode.classList.remove('quiz__progress__number_active')
      }
    })
    paneNodes.forEach((paneNode, i) => {
      if (i == step) {
        paneNode.classList.add('quiz__pane_active')
      } else {
        paneNode.classList.remove('quiz__pane_active')
      }
    })
  }

  const prev = () => {
    setStep(step - 1)
  }

  const next = () => {
    setStep(step + 1)
  }

  const numberNodes = Array.from(root.querySelectorAll('.quiz__progress__number'))
  const paneNodes = Array.from(root.querySelectorAll('.quiz__pane'))
  const actionPrevNodes = Array.from(root.querySelectorAll('.quiz__form__action_prev'))
  const actionNextNodes = Array.from(root.querySelectorAll('.quiz__form__action_next'))
  const fieldNodes = Array.from(root.querySelectorAll('.radio-field'))
  const resetNodes = Array.from(root.querySelectorAll('[data-quiz-reset]'))

  setStep(0)

  actionPrevNodes.forEach(actionPrevNode => actionPrevNode.addEventListener('click', prev))
  actionNextNodes.forEach(actionNextNode => actionNextNode.addEventListener('click', next))

  fieldNodes.forEach(fieldNode => {
    const radio = fieldNode.querySelector('[type="radio"]')
    const text = fieldNode.querySelector('[type="text"]')
    if (text && radio) {
      radio.dataset.initialValue = radio.value
      text.addEventListener('input', () => {
        radio.value = radio.dataset.initialValue.replace('#', text.value)
      })
    }
  })

  resetNodes.forEach(resetNode => {
    resetNode.addEventListener('click', () => {
      root.removeAttribute('data-quiz-success')
      setStep(0)
    })
  })

  root.addEventListener('submit', e => {
    e.preventDefault()
    var formData = new FormData(root);
    // output as an object
    console.log(Object.fromEntries(formData));
    // ...or iterate through the name-value pairs
    for (var pair of formData.entries()) {
      console.log(pair[0] + ": " + pair[1]);
    }

    root.setAttribute('data-quiz-success', '')
  })
}
