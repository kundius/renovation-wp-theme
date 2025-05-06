export function initCitySelect() {
  const root = document.querySelector('[data-city-select]')
  const trigger = document.querySelector('[data-city-select-trigger]')
  const listbox = document.querySelector('[data-city-select-listbox]')

  if (!(root && trigger && listbox)) return

  const options = Array.from(listbox.querySelectorAll('a'))

  // Устанавливаем tabindex="-1" для всех элементов, чтобы управлять фокусом
  // options.forEach((option) => option.setAttribute('tabindex', '0'))

  // Открытие/закрытие меню
  trigger.addEventListener('click', () => {
    const expanded = root.getAttribute('aria-expanded') === 'true'
    root.setAttribute('aria-expanded', !expanded)
    root.classList.toggle('open')
    if (!expanded) {
      options[0]?.focus()
    }
  })

  // Открытие через Enter
  // trigger.addEventListener('keydown', (e) => {
  //   if (e.key === 'Enter' || e.key === ' ') {
  //     e.preventDefault()
  //     trigger.click()
  //   }
  // })

  // Навигация по пунктам через Tab и стрелки
  options.forEach((option, index) => {
    option.addEventListener('keydown', (e) => {
      switch (e.key) {
        case 'Escape':
          // root.setAttribute('aria-expanded', 'false')
          // root.classList.remove('open')
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

  // // Закрытие при клике вне области
  // window.addEventListener('click', (e) => {
  //   if (!root.contains(e.target)) {
  //     root.setAttribute('aria-expanded', 'false')
  //     root.classList.remove('open')
  //   }
  // })
}
