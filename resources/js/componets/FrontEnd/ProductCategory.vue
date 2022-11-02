<template>
    <div class="container mx-auto relative min-h-[380px] lg:min-h-[412px] overflow-hidden">
        <div class="flex justify-between h-[3.5rem] items-center px-2 relative z-[1] ">
            <p class="text-[18px] text-white
            font-bold">{{ name }}</p>
            <a class="text-[14px] text-white
            font-semibold flex" href="#">Xem tất cả <span><mdicon width="24" height="24"
                                                                  name="ChevronRight"></mdicon></span></a>
        </div>
        <img class="absolute top-0 left-0 right-0 object-cover w-full px-4 h-full hidden lg:block"
             :src="bgDesktop"
             alt="">
        <img class="absolute top-0 left-0 right-0 object-cover w-full px-4 h-full lg:hidden"
             :src="bgTablet"
             alt="">
        <swiper
            :slidesPerView="5"
            :spaceBetween="10"
            class="mySwiper"
            :navigation="isNavi"
            :modules="modules"
            :breakpoints="{
                320: {
                slidesPerView: 2,
                spaceBetween: 10
                },
                768: {
                slidesPerView: 4,
                spaceBetween: 10,
                },
                1024: {
                slidesPerView: 5,
                spaceBetween: 10
                },
            }"
        >
            <swiper-slide>
                <product-item></product-item>
            </swiper-slide>
            <swiper-slide>
                <product-item></product-item>
            </swiper-slide>
            <swiper-slide>
                <product-item></product-item>
            </swiper-slide>
            <swiper-slide>
                <product-item></product-item>
            </swiper-slide>
            <swiper-slide>
                <product-item></product-item>
            </swiper-slide>
            <swiper-slide>
                <product-item></product-item>
            </swiper-slide>
        </swiper>

    </div>
</template>

<script>
import ProductItem from "./ProductItem";
import {Swiper, SwiperSlide,} from "swiper/vue";
import "swiper/css/navigation";
import "swiper/css";


import {Navigation} from "swiper";

export default {
    components: {
        ProductItem,
        Swiper,
        SwiperSlide,
    },
    // props: {
    //     name: String,
    //     bgDesktop:String,
    //     bgTablet: String
    // },
    props: [
        'name',
        'bgDesktop',
        'bgTablet',
    ],
    data() {
        return {
            isNavi: true
        }
    },
    setup() {
        return {modules: [Navigation]}
    },
    mounted() {
        let x = (screen.width);
        if (x <= 768) {
            this.isNavi = false;
        }
    }
}
</script>

<style scoped>
.mySwiper {
    height: 100%;
    padding: 1rem;
    overflow: hidden;
}
</style>
