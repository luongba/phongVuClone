<template>
    <div class="mx-auto container hidden lg:block">
        <div class="my-4 flex items-center">
            <div class="flex items-center text-gray-400 text-[13px]" v-for="crumb in crumbs" :key="crumb.id">
                <a :href="crumb.link" class="flex-1">
                    <span>{{ crumb.name }}</span>

                </a>
                <mdicon name="ChevronRight" height="16" width="16" class="mx-2"
                        v-if="crumb.id < crumbs.length"></mdicon>
            </div>


        </div>

    </div>

</template>

<script>
export default {
    props: ['crumbs']
}
</script>

<style scoped>

</style>
