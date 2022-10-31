<template>
    <swiper
        :cssMode="true"
        :navigation="true"
        :pagination="true"
        :mousewheel="true"
        :keyboard="true"
        :modules="modules"
        :loop="true"
        class="mySwiper relative"
    >
        <swiper-slide v-for="slide in slides" :key="slide.id">
            <img :src="slide.image" alt="">
        </swiper-slide>
    </swiper>
    <div class="w-full mt-2 lg:mt-4 px-2">
        <div class="w-full flex justify-center">
            <ul class="grid grid-rows-2 grid-flow-col md:grid-rows-1 gap-2 lg:gap-4">
                <li class="rounded-lg overflow-hidden hover:scale-[1.05] transition-all duration-100">
                    <a href="">
                        <img src="./images/banners/banner1.webp" alt="">
                    </a>

                </li>
                <li class="rounded-lg overflow-hidden hover:scale-[1.05] transition-all duration-100">
                    <a href="">
                        <img src="./images/banners/banner2.webp" alt="">
                    </a>

                </li>
                <li class="rounded-lg overflow-hidden hover:scale-[1.05] transition-all duration-100">
                    <a href="">
                        <img src="./images/banners/banner3.webp" alt="">
                    </a>

                </li>
                <li class="rounded-lg overflow-hidden hover:scale-[1.05] transition-all duration-100">
                    <a href="">
                        <img src="./images/banners/banner4.webp" alt="">
                    </a>

                </li>

            </ul>
        </div>
    </div>
</template>
<script>
// Import Swiper Vue.js components
import {Swiper, SwiperSlide} from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/navigation";
import "swiper/css/pagination";


// import required modules
import {Navigation, Pagination, Mousewheel, Keyboard} from "swiper";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Navigation, Pagination, Mousewheel, Keyboard],
        };
    },
    data() {
        return {
            slides: [
                {
                    id: 1,
                    image: "https://lh3.googleusercontent.com/ac2ZIzZadtew_4hPF8D2xIGT17Cj2qh_uS1sdUIrG8Xlqr_NUI82MqoHg7hiHE1IWJlslpqAg9PvnEQ2jfnnPg0CdghEp_1y=w1920-rw"
                },
                {
                    id: 2,
                    image: "https://lh3.googleusercontent.com/fEKD6kNEdy2csXD2fLtpBZy9sQNs8E_w1f-5MnWi1_mTTUPXrz7mjdBNR-KFYDiD6J3_t4adlr715iUempFlYGxfG5EN3UFhaQ=w1920-rw"
                },
                {
                    id: 3,
                    image: "https://lh3.googleusercontent.com/9X-6qizKkmZLsrh-Aly2ezIpbkVBr6pmHoI0ua_-f_V17lNbk0zs6jYAuQ4l-1SJnYV-LJC2wi55o4FHmFLje-dy4qyjOZMJYQ=w1920-rw"
                },
                {
                    id: 4,
                    image: "https://lh3.googleusercontent.com/xZqj_ngVsA_wxY-H9SHp8AJIpmzSSgX4CFfYVTm_wS3Shaq1wP5WqdYSV-sK3pkuJpxQB3RhNWObbQNFzbLG1sd9xoQpZvHo=w1920-rw"
                },
            ]
        }
    }
};
</script>
<style>
.swiper {
    width: 100%;
    height: 566px;
    overflow: unset;
}

@media only screen and (max-width: 1920px) {
    .mySwiper .swiper-button-next {
        right: calc((100% - 1232px + 16px) / 2);
    }

    .mySwiper .swiper-button-prev {
        left: calc((100% - 1232px + 16px) / 2);
    }
}

@media only screen and (max-width: 1440px) {
    .swiper {
        width: 100%;
        height: 400px;
    }
}

@media only screen and (max-width: 1024px) {
    .swiper {
        width: 100%;
        height: 306px;
    }

    .mySwiper .swiper-button-next {
        right: 10px;
    }

    .mySwiper .swiper-button-prev {
        left: 10px;
    }
}

@media only screen and (max-width: 768px) {
    .swiper {
        width: 100%;
        height: 248px;
    }
}

@media only screen and (max-width: 425px) {
    .swiper {
        width: 100%;
        height: 200px;
    }
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.mySwiper .swiper-button-next {
    width: 48px;
    height: 48px;
    background-image: url('./images/icons/next.svg');
}

.mySwiper .swiper-button-next::after {
    display: none;
}

.mySwiper .swiper-button-prev {
    width: 48px;
    height: 48px;
    background-image: url('./images/icons/prev.svg');
}

.mySwiper .swiper-button-prev::after {
    display: none;
}

</style>
