<template>
    <div class="container mx-auto">
        <div class="flex justify-between h-[3.5rem] items-center px-2 bg-white mb-1">
            <p class="text-[18px] text-gray-800
            font-bold">{{ name }}</p>
            <a class="text-[14px] text-gray-600
            font-semibold flex" href="#">Xem tất cả <span><mdicon width="24" height="24"
                                                                  name="ChevronRight"></mdicon></span></a>
        </div>
        <div class="flex justify-between grid grid-cols-2  md:grid-cols-4 lg:grid-cols-5 gap-1">
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
    </div>
</template>

<script>
import ProductItem from "./ProductItem";
export default {
    name: "ProductList",
    components: {
        ProductItem
    },
    props: {
        name: String
    }
}
</script>

<style scoped>

</style>
