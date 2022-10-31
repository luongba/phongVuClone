require('./bootstrap');

import {createApp} from 'vue'
import Header from './componets/FrontEnd/Header'
import HeroSlider from './componets/FrontEnd/HeroSlider'
import ProductItem from "./componets/FrontEnd/ProductItem"
import mdiVue from 'mdi-vue/v3'
import * as mdijs from '@mdi/js'
const app = createApp({})

app.component('HeaderApp', Header)
app.component('HeroSlider', HeroSlider)
app.component('ProductItem', ProductItem)

app.use(mdiVue, {
    icons: mdijs
})
app.mount('#app')
