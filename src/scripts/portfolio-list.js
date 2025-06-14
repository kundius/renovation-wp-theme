import { applyFeedbackButton } from "./feedback-button"
import { applyPortfolioGallery } from "./portfolio-gallery"

export function applyPortfolioList(root) {
  const wrap = root.querySelector('[data-portfolio-list-wrap]')
  const load = root.querySelector('[data-portfolio-list-load]')
  const tmp = document.createElement('div')

  let currentPage = root.dataset.portfolioListCurrentPage

  load.addEventListener('click', () => {
    currentPage++

    let formData = new FormData()
    formData.set('action', 'portfolio_list_load')
    formData.set('page', currentPage)
    formData.set('tag', root.dataset.portfolioListCurrentTag)

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

          const portfolioGalleryNodes = Array.from(tmp.querySelectorAll('[data-portfolio-gallery]'))
          portfolioGalleryNodes.forEach(applyPortfolioGallery)

          const feedbackButtonNodes = Array.from(tmp.querySelectorAll('[data-feedback-button]'))
          feedbackButtonNodes.forEach(applyFeedbackButton)

          tmp.childNodes.forEach(child => wrap.appendChild(child))

          refreshFsLightbox()

          if (currentPage == root.dataset.portfolioListMaxPage) {
            load.remove()
          }
        } else {
          load.remove()
        }
      });
  })
}

export function initPortfolioList() {
  const nodes = Array.from(document.querySelectorAll('[data-portfolio-list]'))
  nodes.forEach(applyPortfolioList)
}
