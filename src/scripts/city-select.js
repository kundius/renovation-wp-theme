export function applyCitySelect(root) {
  const trigger = root.querySelector('[data-city-select-trigger]')
  const listbox = root.querySelector('[data-city-select-listbox]')

  if (!(trigger && listbox)) return

  const options = Array.from(listbox.querySelectorAll('a'))

  // Открытие/закрытие меню
  trigger.addEventListener('click', () => {
    const expanded = root.getAttribute('aria-expanded') === 'true'
    root.setAttribute('aria-expanded', !expanded)
    root.classList.toggle('open')
    if (!expanded) {
      options[0]?.focus()
    }
  })

  // Навигация по пунктам через Tab и стрелки
  options.forEach((option, index) => {
    option.addEventListener('keydown', (e) => {
      switch (e.key) {
        case 'Escape':
          trigger.focus()
          break

        case 'ArrowDown':
          e.preventDefault()
          options[(index + 1) % options.length]?.focus()
          break

        case 'ArrowUp':
          e.preventDefault()
          const prevIndex = (index - 1 + options.length) % options.length
          options[prevIndex]?.focus()
          break

        case 'Enter':
          e.preventDefault()
          option.click()
          break
      }
    })
    option.addEventListener('blur', (e) => {
      if (!options.includes(e.relatedTarget)) {
        root.setAttribute('aria-expanded', 'false')
        root.classList.remove('open')
      }
    })
  })
}

export function initCitySelect() {
  const nodes = Array.from(document.querySelectorAll('[data-city-select]'))
  nodes.forEach(applyCitySelect)
}
