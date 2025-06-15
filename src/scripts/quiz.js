export function applyQuiz(root) {
  const progressNode = root.querySelector('[data-quiz-progress]')
  const numberNodes = progressNode ? Array.from(progressNode.children) : []
  const panesNode = root.querySelector('[data-quiz-panes]')
  const paneNodes = panesNode ? Array.from(panesNode.children) : []
  const actionPrevNodes = Array.from(root.querySelectorAll('[data-quiz-prev]'))
  const actionNextNodes = Array.from(root.querySelectorAll('[data-quiz-next]'))
  const fieldNodes = Array.from(root.querySelectorAll('.radio-field'))
  const resetNodes = Array.from(root.querySelectorAll('[data-feedack-form-reset]'))

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
      text.addEventListener('input', () => {
        radio.value = text.dataset.template.replace('#', text.value)
      })
    }
  })

  resetNodes.forEach((resetNode) => {
    resetNode.addEventListener('click', () => {
      setStep(0)
    })
  })
}

export function initQuiz() {
  const nodes = Array.from(document.querySelectorAll('[data-quiz]'))
  nodes.forEach(applyQuiz)
}
