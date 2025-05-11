export function applyQuiz(root) {
  const progressNode = root.querySelector('[data-quiz-progress]')
  const numberNodes = progressNode ? Array.from(progressNode.children) : []
  const panesNode = root.querySelector('[data-quiz-panes]')
  const paneNodes = panesNode ? Array.from(panesNode.children) : []
  const actionPrevNodes = Array.from(root.querySelectorAll('[data-quiz-prev]'))
  const actionNextNodes = Array.from(root.querySelectorAll('[data-quiz-next]'))
  const fieldNodes = Array.from(root.querySelectorAll('.radio-field'))
  const resetNodes = Array.from(root.querySelectorAll('[data-quiz-reset]'))

  let step = 0

  const setStep = (n) => {
    step = n
    numberNodes.forEach((numberNode, i) => {
      if (i <= step) {
        numberNode.classList.add('active')
      } else {
        numberNode.classList.remove('active')
      }
    })
    paneNodes.forEach((paneNode, i) => {
      if (i == step) {
        paneNode.classList.add('active')
      } else {
        paneNode.classList.remove('active')
      }
    })
  }

  const prev = () => {
    setStep(step - 1)
  }

  const next = () => {
    setStep(step + 1)
  }

  setStep(0)

  actionPrevNodes.forEach((actionPrevNode) => actionPrevNode.addEventListener('click', prev))
  actionNextNodes.forEach((actionNextNode) => actionNextNode.addEventListener('click', next))

  fieldNodes.forEach((fieldNode) => {
    const radio = fieldNode.querySelector('[type="radio"]')
    const text = fieldNode.querySelector('[type="text"]')
    if (text && radio) {
      radio.dataset.initialValue = radio.value
      text.addEventListener('input', () => {
        radio.value = radio.dataset.initialValue.replace('#', text.value)
      })
    }
  })

  resetNodes.forEach((resetNode) => {
    resetNode.addEventListener('click', () => {
      root.removeAttribute('data-quiz-success')
      setStep(0)
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

    root.setAttribute('data-quiz-success', '')
  })
}

export function initQuiz() {
  const nodes = Array.from(document.querySelectorAll('[data-quiz]'))
  nodes.forEach(applyQuiz)
}
