<template>
    <div class="fixed inset-0 z-[-1] overflow-hidden">
        <div
            class="
                top-[50%]
                translate-y-[-50%]
                bottom-0
                left-[50%]
                translate-x-[-50%]
                absolute
                w-full
            "
        >
            <div
                id="anime_first"
                class="absolute top-[-30px] left-[-30px]"
            ></div>
            <div
                id="anime_second"
                class="absolute top-[-200px] left-[-30px]"
            ></div>
            <div
                id="anime_three"
                class="absolute top-[-300px] left-[-30px]"
            ></div>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style scoped>
#anime_first {
    width: 460px;
    height: 460px;

    border-radius: 100%;
}
#anime_first::before {
    content: "";
    z-index: -1;
    border-radius: 100%;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(to right, #c6ffdd, #fbd786, #f7797d);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(80px);
    opacity: var(0.7);
    transition: opacity 0.3s;
}
#anime_second {
    width: 460px;
    height: 460px;
    border-radius: 100%;
}
#anime_second::before {
    content: "";
    z-index: -1;
    border-radius: 100%;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(to right, #ee9ca7, #ffdde1);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(80px);
    opacity: var(0.7);
    transition: opacity 0.3s;
}
#anime_three {
    width: 460px;
    height: 460px;
    border-radius: 100%;
}
#anime_three::before {
    content: "";
    z-index: -1;
    border-radius: 100%;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(to right, #acb6e5, #86fde8);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(80px);
    opacity: var(0.7);
    transition: opacity 0.3s;
}
</style>