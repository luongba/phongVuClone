<template>
    <button class="main-bg text-white py-2 rounded-md text-[14px] w-full" @click="handleClick">
        {{ title }}
    </button>
</template>
<script>
export default {
    props: {
        title: {
            required: true,
        },

    },
    methods: {
        handleClick(){
            this.$emit('onClick')
        }

    }

}
</script>
