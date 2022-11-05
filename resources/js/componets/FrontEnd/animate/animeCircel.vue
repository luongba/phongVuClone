<template>
    <div class="absolute inset-0 z-[-2] overflow-hidden">
        <div
            class="
                top-[50%]
                translate-y-[-50%]
                bottom-0
                left-[50%]
                translate-x-[-50%]
                absolute
            "
        >
            <div
                id="anime_first"
                class="absolute top-[-30px] left-[-30px]"
            ></div>
            <div
                id="anime_second"
                class="absolute top-[-30px] left-[-30px]"
            ></div>
            <div
                id="anime_three"
                class="absolute top-[-30px] left-[-30px]"
            ></div>
            <svg id="anime-svg" class="inset-0 absolute">
                <circle cx="300" cy="100" r="250" fill="none" />
            </svg>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style scoped>
#anime_first {
    width: 600px;
    height: 600px;

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
    background: linear-gradient(to top left, #dc2430 0%, #fff 100%);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(20px);
    opacity: var(0.7);
    transition: opacity 0.3s;
}
#anime_second {
    width: 600px;
    height: 600px;
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
    background: linear-gradient(to top left, #fff94c 0%, #fff 100%);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(50px);
    opacity: var(0.7);
    transition: opacity 0.3s;
}
#anime_three {
    width: 600px;
    height: 600px;
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
    background: linear-gradient(to top left, #00c6ff 0%, #fff 100%);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(30px);
    opacity: var(0.7);
    transition: opacity 0.3s;
}
</style>