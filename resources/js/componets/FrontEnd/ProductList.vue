<template>
    <div class="w-full relative">
      
        <div class="container mx-auto">
            <div
                class="
                    flex
                    justify-between
                    h-[3.5rem]
                    items-center
                    px-2
                    bg-anime
                    mb-1
                "
            >
                <p class="text-[18px] text-gray-800 font-bold">{{ name }}</p>
                <a class="text-[14px] text-gray-600 font-semibold flex" href="#"
                    >Xem tất cả
                    <span
                        ><mdicon
                            width="24"
                            height="24"
                            name="ChevronRight"
                        ></mdicon></span
                ></a>
            </div>
            <div
                class="
                    flex
                    justify-between
                    grid grid-cols-2
                    md:grid-cols-4
                    lg:grid-cols-5
                    gap-1
                "
            >
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
                <product-item />
            </div>
            <ul class="flex justify-center mt-4">
                <li
                    class="
                        rounded-md
                        w-[2rem]
                        h-[2rem]
                        bg-anime
                        flex-center
                        text-gray-800
                        font-semibold
                        text-[13px]
                        border
                        mr-1
                        cursor-pointer
                    "
                >
                    <mdicon name="ChevronLeft" width="16" height="16"></mdicon>
                </li>
                <li
                    class="
                        rounded-md
                        w-[2rem]
                        h-[2rem]
                        main-bg
                        flex-center
                        text-white
                        font-semibold
                        text-[13px]
                        border
                        mx-1
                        cursor-pointer
                    "
                >
                    1
                </li>
                <li
                    class="
                        rounded-md
                        w-[2rem]
                        h-[2rem]
                        main-bg
                        bg-anime
                        flex-center
                        text-gray-800
                        font-semibold
                        text-[13px]
                        border
                        mx-1
                        cursor-pointer
                    "
                >
                    2
                </li>
                <li
                    class="
                        rounded-md
                        w-[2rem]
                        h-[2rem]
                        main-bg
                        bg-anime
                        flex-center
                        text-gray-800
                        font-semibold
                        text-[13px]
                        border
                        mx-1
                        cursor-pointer
                    "
                >
                    3
                </li>
                <li
                    class="
                        rounded-md
                        w-[2rem]
                        h-[2rem]
                        bg-anime
                        flex-center
                        text-gray-800
                        font-semibold
                        text-[13px]
                        border
                        ml-1
                        cursor-pointer
                    "
                >
                    <mdicon name="ChevronRight" width="16" height="16"></mdicon>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import animeTeleVue from "./animate/animeTele.vue";
import ProductItem from "./ProductItem";
import { tele } from "./animate/animate";
export default {
    name: "ProductList",
    components: {
        ProductItem,
        animeTeleVue,
    },
    props: {
        name: String,
    },
    methods: {
        playAnime() {
            tele();
        },
    },
    mounted() {
        this.playAnime();
    },
};
</script>

<style scoped>
</style>
