import { truncateString } from './utils'

export function applyAttachmentField(root) {
  const label = root.querySelector('[data-attachment-field-label]')
  const input = root.querySelector('[data-attachment-field-input]')

  label.dataset.initialLabel = label.textContent.trim()

  input.addEventListener('change', function () {
    const fileName = this.files[0]
      ? truncateString(this.files[0].name, label.dataset.initialLabel.length)
      : label.dataset.initialLabel
    label.textContent = fileName
  })
}

export function initAttachmentField() {
  const nodes = Array.from(document.querySelectorAll('[data-attachment-field]'))
  nodes.forEach(applyAttachmentField)
}
