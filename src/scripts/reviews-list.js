export function applyReviewsList(root) {
  const wrap = root.querySelector('[data-reviews-list-wrap]')
  const load = root.querySelector('[data-reviews-list-load]')
  const tmp = document.createElement('div')

  let currentPage = root.dataset.reviewsListCurrentPage

  load.addEventListener('click', () => {
    currentPage++

    let formData = new FormData()
    formData.set('action', 'reviews_list_load')
    formData.set('page', currentPage)

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

          if (currentPage == root.dataset.reviewsListMaxPage) {
            load.remove()
          }
        } else {
          load.remove()
        }
      });
  })
}

export function initReviewsList() {
  const nodes = Array.from(document.querySelectorAll('[data-reviews-list]'))
  nodes.forEach(applyReviewsList)
}
