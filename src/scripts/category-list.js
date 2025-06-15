export function applyCategoryList(root) {
  const wrap = root.querySelector('[data-category-list-wrap]')
  const load = root.querySelector('[data-category-list-load]')
  const tmp = document.createElement('div')

  let currentPage = root.dataset.categoryListCurrentPage

  load.addEventListener('click', () => {
    currentPage++

    let formData = new FormData()
    formData.set('action', 'category_list_load')
    formData.set('page', currentPage)
    formData.set('category', root.dataset.categoryListId)

    load.textContent = 'Загрузка...'

    fetch(theme_ajax.url, {
      method: "POST",
      body: formData,
    })
      .then(response => response.text())
      .then(response => {
        load.textContent = 'Показать ещё'

        if (response) {
          tmp.innerHTML = response

          tmp.childNodes.forEach(child => wrap.appendChild(child))

          refreshFsLightbox()

          if (currentPage == root.dataset.categoryListMaxPage) {
            load.remove()
          }
        } else {
          load.remove()
        }
      });
  })
}

export function initCategoryList() {
  const nodes = Array.from(document.querySelectorAll('[data-category-list]'))
  nodes.forEach(applyCategoryList)
}
