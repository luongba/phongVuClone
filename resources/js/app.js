require('./bootstrap');

import {createApp} from 'vue'

//Trang-chu
import Header from './componets/FrontEnd/Header'
import HeroSlider from './componets/FrontEnd/Trang-Chu/components/HeroSlider'
import ProductItem from "./componets/FrontEnd/ProductItem"
import ProductCategory from "./componets/FrontEnd/ProductCategory"
import BannerList from "./componets/FrontEnd/Trang-Chu/components/BannerList"
import BrandList from "./componets/FrontEnd/Trang-Chu/components/BrandList"
import ProductList from "./componets/FrontEnd/ProductList"
import Footer from "./componets/FrontEnd/Footer"
import animeCircel from "./componets/FrontEnd/animate/animeCircel"
import amimeTele from "./componets/FrontEnd/animate/animeTele.vue"
//Chi-Tiet-San-Pham
import BreadCrumb from "./componets/FrontEnd/Breadcrumb"
import ChiTietSanPham from "./componets/FrontEnd/Chi-Tiet-San-Pham/ChiTietSanPham"


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
app.component('FooterApp', Footer)
app.component('BreadCrumb', BreadCrumb)
app.component('ChiTietSanPham', ChiTietSanPham)
app.component('AnimeCicel', animeCircel)
app.component('AmimeTele', amimeTele)



app.use(mdiVue, {
    icons: mdijs
})
app.mount('#app')
