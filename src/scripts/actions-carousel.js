import EmblaCarousel from 'embla-carousel'
import { addPrevNextBtnsClickHandlers } from './EmblaCarouselArrowButtons'
import { addDotBtnsAndClickHandlers } from './EmblaCarouselDotButton'

export function applyActionsCarousel(root) {
  const viewportNode = root.querySelector('[data-actions-carousel-viewport]')

  const emblaApi = EmblaCarousel(viewportNode, {
    loop: true,
    slidesToScroll: 'auto',
    watchDrag: true
  })

  const prevBtnNode = root.querySelector('[data-actions-carousel-prev]')
  const nextBtnNode = root.querySelector('[data-actions-carousel-next]')

  if (prevBtnNode && nextBtnNode) {
    const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
      emblaApi,
      prevBtnNode,
      nextBtnNode
    )

    emblaApi.on('destroy', removePrevNextBtnsClickHandlers)
  }

  const dotsNode = root.querySelector('[data-actions-carousel-dots]')

  if (dotsNode) {
    const removeDotBtnsAndClickHandlers = addDotBtnsAndClickHandlers(emblaApi, dotsNode)

    emblaApi.on('destroy', removeDotBtnsAndClickHandlers)
  }
}

export function initActionsCarousel() {
  const nodes = Array.from(document.querySelectorAll('[data-actions-carousel]'))
  nodes.forEach(applyActionsCarousel)
}
