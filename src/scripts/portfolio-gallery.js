import EmblaCarousel from 'embla-carousel'
import { addPrevNextBtnsClickHandlers } from './EmblaCarouselArrowButtons'

export function applyPortfolioGallery(root) {
  const viewportNode = root.querySelector('[data-portfolio-gallery-viewport]')

  const emblaApi = EmblaCarousel(viewportNode, {
    loop: false,
    slidesToScroll: 'auto',
    watchDrag: false
  })

  const prevBtnNode = root.querySelector('[data-portfolio-gallery-prev]')
  const nextBtnNode = root.querySelector('[data-portfolio-gallery-next]')

  if (prevBtnNode && nextBtnNode) {
    const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
      emblaApi,
      prevBtnNode,
      nextBtnNode
    )

    emblaApi.on('destroy', removePrevNextBtnsClickHandlers)
  }
}

export function initPortfolioGallery() {
  const nodes = Array.from(document.querySelectorAll('[data-portfolio-gallery]'))
  nodes.forEach(applyPortfolioGallery)
}
