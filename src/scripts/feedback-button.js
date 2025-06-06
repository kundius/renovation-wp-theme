import MicroModal from 'micromodal'

export function applyFeedbackButton(button) {
  const modal = document.getElementById('feedack-modal')

  if (!modal) return

  const titleNode = modal.querySelector('[data-feedack-modal-title]')
  const descNode = modal.querySelector('[data-feedack-modal-desc]')
  const actionNode = modal.querySelector('[data-feedack-modal-action]')
  const formNode = modal.querySelector('[data-feedack-form]')
  const subjectNode = modal.querySelector('[data-feedack-form-subject]')

  const defaults = {
    title: titleNode.innerHTML,
    desc: descNode.innerHTML,
    action: actionNode.innerHTML,
    subject: subjectNode.value,
    goal: formNode.dataset.feedackFormGoal
  }

  button.addEventListener('click', (e) => {
    e.preventDefault()

    titleNode.innerHTML = button.dataset.feedbackButtonTitle || defaults.title
    descNode.innerHTML = button.dataset.feedbackButtonDesc || defaults.desc
    actionNode.innerHTML = button.dataset.feedbackButtonAction || defaults.action
    subjectNode.value = button.dataset.feedbackButtonSubject || defaults.subject
    formNode.dataset.feedackFormGoal = button.dataset.feedbackButtonGoal || defaults.goal

    MicroModal.show('feedack-modal', {
      awaitOpenAnimation: true,
      awaitCloseAnimation: true,
      closeTrigger: 'data-modal-close'
    })
  })
}

export function initFeedbackButton() {
  const items = document.querySelectorAll('[data-feedback-button]') || []

  Array.from(items).forEach(applyFeedbackButton)
}
