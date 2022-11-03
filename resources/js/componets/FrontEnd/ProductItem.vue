<template>
    <a href="#" class="bg-white h-full px-4 py-4 group cursor-pointer block relative">
        <div class="flex flex-center relative">
            <img class="group-hover:scale-[1.04] ease-in duration-100"
                 src="https://lh3.googleusercontent.com/ms2dvVvV-F1fCsnZOhLcFKWHiDxipdSKBhHPW4BrmASMFJB2AgfOico4EvjasPUfbCyhNmbQiTS4e1oIY9YDwIcJEmzc9Bro=w230-rw"
                 alt="">
            <div class="bg-price absolute bottom-0 left-0 rounded-md">
                <p class="text-yellow-400 font-semibold text-[8px] lg:text-[10px] uppercase text-start">Tiết kiệm</p>
                <p class="text-[11px] lg:text-[12px] font-bold text-white mt-1">2.000.000 đ</p>
            </div>
        </div>
        <div class="flex flex-start flex-col">
            <p class="text-[12px] text-gray-600 font-semibold text-start">Chuột không dây Akko Smart 1 Sailor Venus</p>
            <div class="flex justify-between">
                <p class="main-color text-[15px] font-bold ">125.000 đ</p>
                <!--                <img class="w-[24px] h-[24px]" src="./images/icons/free-ship.svg" alt="">-->
            </div>

            <p class="text-orange-400 text-[13px] font-semibold text-start">Còn 4 sản phẩm</p>
            <div class="text-start">
                <span class="text-gray-400 text-[13px] line-through text-start">249.000 đ</span>
                <span class="main-color text-[12px] font-semibold ml-2 text-start">-10%</span>
            </div>
        </div>
    </a>
</template>
<script>
export default {
}
</script>
<style scoped>
.bg-price {
    background: url("./images/bg/bg-price.svg") 0% 0% / cover no-repeat;;
    background-repeat: no-repeat;
    padding: 0.25rem 0.5rem;
    height: 36px;
    line-height: 12px;
}
</style>
