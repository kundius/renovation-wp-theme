export function applyFeedbackForm(form) {
  const resetNodes = Array.from(form.querySelectorAll('[data-feedack-form-reset]'))
  const submit = form.querySelector('[type="submit"]')
  const errors = form.querySelector('[data-feedack-form-errors]')

  resetNodes.forEach((resetNode) => resetNode.addEventListener('click', () => {
    errors.innerHTML = ''
    form.removeAttribute('data-feedack-form-failure')
    form.removeAttribute('data-feedack-form-success')
    form.removeAttribute('data-feedack-form-loading')
    submit.removeAttribute('disabled')
  }))

  form.addEventListener('submit', (e) => {
    e.preventDefault()

    errors.innerHTML = ''
    form.removeAttribute('data-feedack-form-failure')
    form.removeAttribute('data-feedack-form-success')
    form.setAttribute('data-feedack-form-loading', '')
    submit.setAttribute('disabled', '')

    const formData = new FormData(e.target)
    formData.append('action', form.dataset.feedackFormAction)

    fetch(e.target.action, {
      method: 'post',
      body: formData
    })
      .then((response) => response.json())
      .then((result) => {
        if (!result.success) {
          errors.innerHTML = Object.values(result.data).join('<br>')
          form.setAttribute('data-feedack-form-failure', '')
        } else {
          form.setAttribute('data-feedack-form-success', '')
          form.reset()

          if (form.dataset.feedackFormGoal && typeof ym !== 'undefined') {
            const elYmId = document.querySelector('[data-ym-id]')
            if (elYmId && elYmId.dataset.ymId) {
              ym(elYmId.dataset.ymId, 'reachGoal', form.dataset.feedackFormGoal)
              console.log('goal', elYmId.dataset.ymId, form.dataset.feedackFormGoal)
            }
          }

          // setTimeout(() => {
          //   form.removeAttribute('data-feedack-form-success')
          // }, 4000)
        }

        form.removeAttribute('data-feedack-form-loading')
        submit.removeAttribute('disabled', '')
      })
      .catch((error) => console.error(error))
  })
}

export function initFeedbackForm() {
  const items = document.querySelectorAll('[data-feedack-form]') || []

  Array.from(items).forEach(applyFeedbackForm)
}
