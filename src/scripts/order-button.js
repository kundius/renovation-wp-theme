import MicroModal from 'micromodal'

export function applyOrderButton(button) {
  const modal = document.getElementById('order-modal')

  if (!modal) return

  button.addEventListener('click', (e) => {
    e.preventDefault()

    const titleNodes = modal.querySelectorAll('[data-order-modal-title]')
    const descNodes = modal.querySelectorAll('[data-order-modal-desc]')
    const textNodes = modal.querySelectorAll('[data-order-modal-text]')
    const goalNodes = modal.querySelectorAll('[data-feedack-form-goal]')
    const subjectNodes = modal.querySelectorAll('[data-feedack-form-subject]')

    if (button.dataset.orderButtonTitle) {
      Array.from(titleNodes).forEach(titleNode => titleNode.textContent = button.dataset.orderButtonTitle || 'Заказать обратный звонок')
      Array.from(subjectNodes).forEach(subjectNode => subjectNode.setAttribute('value', button.dataset.orderButtonTitle || 'Заказать обратный звонок'))
    }

    if (button.dataset.orderButtonDesc) {
      Array.from(descNodes).forEach(descNode => descNode.textContent = button.dataset.orderButtonDesc || null)
    }

    if (button.dataset.orderButtonAction) {
      Array.from(textNodes).forEach(textNode => textNode.textContent = button.dataset.orderButtonAction || 'Заказать звонок')
    }

    if (button.dataset.orderButtonGoal) {
      Array.from(goalNodes).forEach(goalNode => goalNode.setAttribute('data-feedack-form-goal', button.dataset.orderButtonGoal || 'MODAL_ORDER'))
    }

    MicroModal.show('order-modal', {
      awaitOpenAnimation: true,
      awaitCloseAnimation: true,
      closeTrigger: 'data-modal-close'
    })
  })
}

export function initOrderButton() {
  const items = document.querySelectorAll('[data-order-button]') || []

  Array.from(items).forEach(applyOrderButton)
}
