import 'normalize.css'
import './src/styles/fonts.css'
import './src/styles/main.css'
import './src/styles/header.css'
import './src/styles/footer.css'
import './src/styles/modal.css'
import './src/styles/hero.css'
import './src/styles/about.css'
import './src/styles/quiz.css'
import './src/styles/portfolio.css'
import './src/styles/comparison.css'
import './src/styles/prices.css'
import './src/styles/terms.css'
import './src/styles/calc.css'

import { initStickyHeader } from './src/scripts/sticky-header'
import fslightbox from 'fslightbox'
import { initCitySelect } from './src/scripts/city-select'
import { initHeroForm } from './src/scripts/hero-form'
// import { initMobileMenu } from './src/scripts/mobile-menu'
// import { initHomePreachingCarousel } from './src/scripts/home-preaching-carousel'
// import { initQuestionForm } from './src/scripts/question-form'
import { Mask, MaskInput } from 'maska'
import { initQuiz } from './src/scripts/quiz'
import { initPortfolioEmbla } from './src/scripts/portfolio-embla'
import { initPortfolioGallery } from './src/scripts/portfolio-gallery'
import { initComparisonCarousel } from './src/scripts/comparison-carousel'
import { initComparison } from './src/scripts/comparison'
import { initRangeField } from './src/scripts/range-field'
import { initAttachmentField } from './src/scripts/attachment-field'
import { initAttachmentsField } from './src/scripts/attachments-field'
import { initCalc } from './src/scripts/calc'

new MaskInput('[data-maska]')

initStickyHeader()
initCitySelect()
initHeroForm()
initQuiz()
initPortfolioEmbla()
initPortfolioGallery()
initComparisonCarousel()
initComparison()
initRangeField()
initAttachmentField()
initAttachmentsField()
initCalc()
// initQuestionForm()
// initMobileMenu()
// initHomePreachingCarousel()
