import EmblaCarousel from 'embla-carousel'
import { addPrevNextBtnsClickHandlers } from './EmblaCarouselArrowButtons'
import { addDotBtnsAndClickHandlers } from './EmblaCarouselDotButton'

export function applyExpertsEmbla(root) {
  const viewportNode = root.querySelector('[data-experts-embla-viewport]')

  const emblaApi = EmblaCarousel(viewportNode, { loop: true, slidesToScroll: 'auto' })

  const prevBtnNode = root.querySelector('[data-experts-embla-prev]')
  const nextBtnNode = root.querySelector('[data-experts-embla-next]')

  if (prevBtnNode && nextBtnNode) {
    const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
      emblaApi,
      prevBtnNode,
      nextBtnNode
    )

    emblaApi.on('destroy', removePrevNextBtnsClickHandlers)
  }

  const dotsNode = root.querySelector('[data-experts-carousel-dots]')

  if (dotsNode) {
    const removeDotBtnsAndClickHandlers = addDotBtnsAndClickHandlers(emblaApi, dotsNode)

    emblaApi.on('destroy', removeDotBtnsAndClickHandlers)
  }
}

export function initExpertsEmbla() {
  const nodes = Array.from(document.querySelectorAll('[data-experts-embla]'))
  nodes.forEach(applyExpertsEmbla)
}
