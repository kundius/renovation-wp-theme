import { truncateString } from './utils'

const allowedTypes = ['image/jpeg', 'image/png', 'image/gif']

/*
<div class="gallery-field__item" data-gallery-field-item>
  <img type="button" class="gallery-field__item-image" src="" alt="">
  <input type="file" class="gallery-field__item-input" tabindex="-1" data-gallery-field-input>
  <button type="button" class="gallery-field__item-remove" data-gallery-field-remove>
    <span class="icon icon-close"></span>
  </button>
</div>
*/
export function applyGalleryField(root) {
  const add = root.querySelector('[data-gallery-field-add]')

  add.addEventListener('click', () => {
    // Создаем скрытый input file
    const tmpFileInput = document.createElement('input')
    tmpFileInput.type = 'file'
    tmpFileInput.multiple = true
    tmpFileInput.accept = allowedTypes.join(', ')
    tmpFileInput.classList.add('hidden')

    // Добавляем его на страницу и эмулируем клик
    document.body.appendChild(tmpFileInput)
    tmpFileInput.click()

    // Обработчик выбора файлов
    tmpFileInput.addEventListener('change', () => {
      const files = Array.from(tmpFileInput.files)

      files.forEach(file => {
        if (!allowedTypes.includes(file.type)) {
          alert(`Файл "${file.name}" не является изображением.`)
          return
        }

        const reader = new FileReader()
        reader.onload = function (e) {
          // Создаем элемент галереи
          const item = document.createElement('div')
          item.classList.add('gallery-field__item')

          const img = document.createElement('img')
          img.src = e.target.result
          img.classList.add('gallery-field__item-image')

          const deleteBtn = document.createElement('div')
          deleteBtn.type = 'button'
          deleteBtn.innerHTML = '<span class="icon icon-close"></span>'
          deleteBtn.classList.add('gallery-field__item-remove')

          const itemFileInput = document.createElement('input')
          itemFileInput.type = 'file'
          itemFileInput.name = 'gallery'
          itemFileInput.setAttribute('tabindex', -1)
          itemFileInput.multiple = false
          itemFileInput.accept = allowedTypes.join(', ')
          itemFileInput.classList.add('gallery-field__item-input')
          const dataTransfer = new DataTransfer()
          dataTransfer.items.add(file)
          itemFileInput.files = dataTransfer.files

          // Удаление элемента
          deleteBtn.addEventListener('click', () => {
            item.remove() // удалить превью
          })

          item.appendChild(img)
          item.appendChild(itemFileInput)
          item.appendChild(deleteBtn)
          root.insertBefore(item, root.firstChild)
        }

        reader.readAsDataURL(file)
      })

      // Убираем временный инпут
      document.body.removeChild(tmpFileInput)
    })
  })
}

export function initGalleryField() {
  const nodes = Array.from(document.querySelectorAll('[data-gallery-field]'))
  nodes.forEach(applyGalleryField)
}
