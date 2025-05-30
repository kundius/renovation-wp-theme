import 'normalize.css'
import './src/styles/fonts.scss'
import './src/styles/main.scss'
import './src/styles/header.scss'
import './src/styles/footer.scss'
import './src/styles/modal.scss'
import './src/styles/hero.scss'
import './src/styles/about.scss'
import './src/styles/quiz.scss'
import './src/styles/portfolio.scss'
import './src/styles/comparison.scss'
import './src/styles/services.scss'
import './src/styles/terms.scss'
import './src/styles/calc.scss'
import './src/styles/actions.scss'
import './src/styles/reviews.scss'
import './src/styles/reasons.scss'
import './src/styles/measurement.scss'
import './src/styles/problems.scss'
import './src/styles/experts.scss'
import './src/styles/prices.scss'
import './src/styles/estimate.scss'
import './src/styles/hiw.scss'
import './src/styles/team.scss'
import './src/styles/trust.scss'
import './src/styles/faq.scss'
import './src/styles/text.scss'
import './src/styles/consultation.scss'

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
import { initActionsCarousel } from './src/scripts/actions-carousel'
import { initPrices } from './src/scripts/prices'
import { initFaq } from './src/scripts/faq'

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
initActionsCarousel()
initPrices()
initFaq()
// initQuestionForm()
// initMobileMenu()
// initHomePreachingCarousel()
