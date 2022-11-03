<template>
    <div class="container mx-auto">
        <div class="bg-white p-4 rounded-md">
            <p class="text-[18px] text-gray-800 font-bold mb-4 ">Thương hiệu nổi bật</p>
            <div class="w-full flex justify-center">
                <ul class="grid grid-rows-2 grid-flow-col md:grid-rows-1 gap-2 lg:gap-4">
                    <li class=" overflow-hidden hover:scale-[1.05] transition-all duration-100" v-for="brand in brands" :key="brand.id">
                        <a href="">
                            <img class="rounded-lg h-[98px] lg:h-[155px] max-h-[155px] object-cover" :src="brand.image" alt="">
                            <p class="text-center mt-4 font-semibold text-gray-600 text-[13px] lg:text-[15px]">{{brand.name}}</p>
                        </a>

                    </li>


                </ul>
            </div>
        </div>

    </div>
</template>
<script >
export default {
    props: [
        'brands',
    ]
}
</script>
