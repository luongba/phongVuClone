require('./bootstrap');

import {createApp} from 'vue'
import Header from './componets/FrontEnd/Header'
import mdiVue from 'mdi-vue/v3'
import * as mdijs from '@mdi/js'
const app = createApp({})

app.component('HeaderApp', Header)
app.use(mdiVue, {
    icons: mdijs
})
app.mount('#app')
