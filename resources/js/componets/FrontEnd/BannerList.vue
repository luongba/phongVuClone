<template>
        <div class="container mx-auto">
            <div class="w-full flex justify-center">
                <ul class="grid grid-rows-2 grid-flow-col md:grid-rows-1 gap-2 lg:gap-4">
                    <li class="rounded-lg overflow-hidden hover:scale-[1.05] transition-all duration-100" v-for="banner in banners" :key="banner.id">
                        <a href="">
                            <img :src="banner.image" alt="">
                        </a>

                    </li>


                </ul>
            </div>
        </div>
</template>
<script >
    export default {
        props: [
            'banners',
        ]
    }
</script>
