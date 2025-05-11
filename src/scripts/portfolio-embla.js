import EmblaCarousel from 'embla-carousel'
import { addPrevNextBtnsClickHandlers } from './EmblaCarouselArrowButtons'

export function applyPortfolioEmbla(emblaNode) {
  const options = { loop: false, slidesToScroll: 'auto' }
  const emblaApi = EmblaCarousel(emblaNode, options)

  const prevBtnNode = document.querySelector('[data-portfolio-embla-prev]')
  const nextBtnNode = document.querySelector('[data-portfolio-embla-next]')

  if (prevBtnNode && nextBtnNode) {
    const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
      emblaApi,
      prevBtnNode,
      nextBtnNode
    )

    emblaApi.on('destroy', removePrevNextBtnsClickHandlers)
  }
}

export function initPortfolioEmbla() {
  const emblaNodes = Array.from(document.querySelectorAll('[data-portfolio-embla]'))
  emblaNodes.forEach(applyPortfolioEmbla)
}
