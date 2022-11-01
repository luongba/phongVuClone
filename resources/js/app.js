require('./bootstrap');

import {createApp} from 'vue'
import Header from './componets/FrontEnd/Header'
import HeroSlider from './componets/FrontEnd/HeroSlider'
import ProductItem from "./componets/FrontEnd/ProductItem"
import ProductCategory from "./componets/FrontEnd/ProductCategory"
import BannerList from "./componets/FrontEnd/BannerList"
import BrandList from "./componets/FrontEnd/BrandList"
import ProductList from "./componets/FrontEnd/ProductList"
import mdiVue from 'mdi-vue/v3'
import * as mdijs from '@mdi/js'
const app = createApp({})

app.component('HeaderApp', Header)
app.component('HeroSlider', HeroSlider)
app.component('ProductItem', ProductItem)
app.component('ProductCategory', ProductCategory)
app.component('BannerList', BannerList)
app.component('BrandList', BrandList)
app.component('ProductList', ProductList)



app.use(mdiVue, {
    icons: mdijs
})
app.mount('#app')
