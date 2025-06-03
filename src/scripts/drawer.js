import { disableScroll, enableScroll } from './utils'

function parseMenu(node) {
  const result = [];

  Array.from(node.children).forEach(li => {
    const link = li.querySelector('a');
    const ul = li.querySelector('ul');

    if (link) {
      const item = {
        text: link.textContent.trim(),
        href: link.getAttribute('href')
      };

      if (ul) {
        item.children = parseMenu(ul);
      }

      result.push(item);
    }
  });

  return result;
}

function getElementByPath(structure, path) {
  let current = structure;

  for (let i = 0; i < path.length - 1; i++) {
    const index = path[i];
    if (!current[index] || !current[index].children) {
      return null;
    }
    current = current[index].children;
  }

  return current[path[path.length - 1]] || null;
}

export function applyDrawer(root) {
  const nav = root.querySelector('[data-drawer-nav]')
  const openElements = document.querySelectorAll(`[data-drawer-open="${root.dataset.drawer}"]`)
  const closeElements = root.querySelectorAll(`[data-drawer-close]`)
  const headerNav = document.querySelector('.header__nav')
  const menuArray = parseMenu(headerNav)

  Array.from(openElements).forEach(openElement => {
    openElement.addEventListener('click', () => {
      disableScroll()
      root.setAttribute('data-drawer-state', 'opened')
    })
  })
  Array.from(closeElements).forEach(closeElement => {
    closeElement.addEventListener('click', () => {
      enableScroll()
      root.setAttribute('data-drawer-state', '')
    })
  })

  // TODO: если понадобится анимация, вместо очестики nav вставляем новый список с классами абсолютного позиционирвоания и анимации появления
  // после заверешния анимации удаляем первый (старый) список и снимаем классы позиционирования и анимации
  const renderNav = (menuPath = null) => {
    nav.innerHTML = ''

    if (!menuPath) {
      const list = document.createElement('ul')
      list.classList.add('primary')

      // первый уровень вложенности
      menuArray.forEach((menuItem, index) => {
        const link = document.createElement('a')
        link.setAttribute('href', menuItem.href)
        link.textContent = menuItem.text
        const row = document.createElement('li')
        row.appendChild(link)

        // второй уровень вложенности, он отображается сразу
        if (menuItem.children) {
          row.classList.add('has-children')
          const childrenList = document.createElement('ul')
          menuItem.children.forEach((childrenItem, childrenIndex) => {
            const childrenLink = document.createElement('a')
            childrenLink.setAttribute('href', childrenItem.href)
            childrenLink.textContent = childrenItem.text
            const childrenRow = document.createElement('li')
            childrenRow.appendChild(childrenLink)
            childrenList.appendChild(childrenRow)

            // третий уровень уже нужно показывать по нажатию
            if (childrenItem.children) {
              childrenRow.classList.add('has-children')
              childrenLink.addEventListener('click', e => {
                e.preventDefault()
                renderNav([index, childrenIndex])
              })
            }
          })
          row.appendChild(childrenList)
        }

        list.appendChild(row)
      })

      nav.appendChild(list)
    } else {
      const parentItem = getElementByPath(menuArray, menuPath)

      const parentList = document.createElement('ul')
      parentList.classList.add('secondary')

      const backLink = document.createElement('a')
      backLink.setAttribute('href', '#')
      backLink.textContent = 'Назад'
      const backRow = document.createElement('li')
      backRow.classList.add('back')
      backRow.appendChild(backLink)
      parentList.appendChild(backRow)

      backLink.addEventListener('click', e => {
        e.preventDefault()
        // поднимаемся на уровень выше
        const newPath = menuPath.slice(0, -1)
        // если в пути остался один элемент, то это меню воторого уровня,
        // которое показывается вместе с первым, поэтому уходим в начало
        if (newPath.length > 1) {
          renderNav(newPath)
        } else {
          renderNav()
        }
      })

      const parentLink = document.createElement('a')
      parentLink.setAttribute('href', parentItem.href)
      parentLink.textContent = parentItem.text
      const parentRow = document.createElement('li')
      parentRow.classList.add('parent')
      parentRow.appendChild(parentLink)
      parentList.appendChild(parentRow)

      // по задумке дочерние должны быть всегда, а иначе как сюда попасть?
      if (parentItem.children) {
        parentItem.children.forEach((childrenItem, childrenIndex) => {
          const childrenLink = document.createElement('a')
          childrenLink.setAttribute('href', childrenItem.href)
          childrenLink.textContent = childrenItem.text
          const childrenRow = document.createElement('li')
          childrenRow.appendChild(childrenLink)
          parentList.appendChild(childrenRow)

          // если есть вложенность нужно показывать по нажатию
          if (childrenItem.children) {
            childrenRow.classList.add('has-children')
            childrenLink.addEventListener('click', e => {
              e.preventDefault()
              renderNav([...menuPath, childrenIndex])
            })
          }
        })
      }

      nav.appendChild(parentList)
    }
  }

  document.addEventListener('DOMContentLoaded', () => renderNav())
}

export function initDrawer() {
  const nodes = Array.from(document.querySelectorAll('[data-drawer]'))
  nodes.forEach(applyDrawer)
}
