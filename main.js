import 'normalize.css'
import './src/styles/fonts.css'
import './src/styles/main.css'
import './src/styles/header.css'
import './src/styles/footer.css'
import './src/styles/modal.css'
import './src/styles/hero.css'

import { initStickyHeader } from './src/scripts/sticky-header'
import fslightbox from 'fslightbox'
import { initCitySelect } from './src/scripts/city-select'
import { initHeroForm } from './src/scripts/hero-form'
// import { initMobileMenu } from './src/scripts/mobile-menu'
// import { initHomePreachingCarousel } from './src/scripts/home-preaching-carousel'
// import { initQuestionForm } from './src/scripts/question-form'
import { Mask, MaskInput } from 'maska'

new MaskInput('[data-maska]')

initStickyHeader()
initCitySelect()
initHeroForm()
// initQuestionForm()
// initMobileMenu()
// initHomePreachingCarousel()
