import EmblaCarousel from 'embla-carousel'
import { addPrevNextBtnsClickHandlers } from './EmblaCarouselArrowButtons'

export function applyComparisonCarousel(root) {
  const viewportNode = root.querySelector('[data-comparison-carousel-viewport]')

  const emblaApi = EmblaCarousel(viewportNode, {
    loop: true,
    slidesToScroll: 'auto',
    watchDrag: false
  })

  const prevBtnNode = root.querySelector('[data-comparison-carousel-prev]')
  const nextBtnNode = root.querySelector('[data-comparison-carousel-next]')

  if (prevBtnNode && nextBtnNode) {
    const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
      emblaApi,
      prevBtnNode,
      nextBtnNode
    )

    emblaApi.on('destroy', removePrevNextBtnsClickHandlers)
  }
}

export function initComparisonCarousel() {
  const nodes = Array.from(document.querySelectorAll('[data-comparison-carousel]'))
  nodes.forEach(applyComparisonCarousel)
}
