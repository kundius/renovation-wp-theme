import { applyAttachmentField } from './attachment-field'
import { truncateString } from './utils'

export function applyAttachmentsField(root) {
  const updateCount = () => {
    root.setAttribute(
      'data-attachments-field-count',
      root.querySelectorAll('[data-attachments-field-row]').length
    )
  }
  root.addEventListener('click', (e) => {
    const add = e.target.closest('[data-attachments-field-add]')
    const remove = e.target.closest('[data-attachments-field-remove]')
    if (add) {
      const row = document.createElement('div')
      row.classList.add('attachments-field__row')
      row.setAttribute('data-attachments-field-row', '')
      row.innerHTML = `
        <label class="attachment-field" data-attachment-field>
          <input type="file" name="file" class="attachment-field__input" data-attachment-field-input />
          <span class="attachment-field__label control-button">
            <span data-attachment-field-label>Выберите файл</span>
            <span class="icon icon-pin"></span>
          </span>
        </label>

        <button type="button" class="more-button attachments-field__remove" data-attachments-field-remove>
          <span class="more-button__text">Убрать</span>
          <span class="more-button__icon">
            <span class="icon icon-minus"></span>
          </span>
        </button>

        <button type="button" class="more-button attachments-field__add" data-attachments-field-add>
          <span class="more-button__text">Добавить ещё</span>
          <span class="more-button__icon">
            <span class="icon icon-plus"></span>
          </span>
        </button>
      `
      root.prepend(row)
      const attachmentField = row.querySelector('[data-attachment-field]')
      applyAttachmentField(attachmentField)
      updateCount()
    }
    if (remove) {
      const row = e.target.closest('[data-attachments-field-row]')
      if (row) {
        row.remove()
        updateCount()
      }
    }
  })
}

export function initAttachmentsField() {
  const nodes = Array.from(document.querySelectorAll('[data-attachments-field]'))
  nodes.forEach(applyAttachmentsField)
}
