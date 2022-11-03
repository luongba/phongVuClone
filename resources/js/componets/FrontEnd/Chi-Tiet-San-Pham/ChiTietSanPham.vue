<template >
    <div class="bg-white rounded-sm p-4 w-[70%]">
        <div class="flex justify-between">
            <div class="flex flex-col w-[40%] justify-center">
                <div class="w-full">
                    <img
                        src="https://lh3.googleusercontent.com/835MfBqgcTVYh7g1zWDtJUFp2QnjeMswHm7JE_qLVp5mBAmR1Hep69EL3Jab4Dm6jyDaKBJIAKcfKqK4sQ=w500-rw"
                        class="w-full"
                        alt=""
                    />
                </div>
                <div>
                    <ul class="flex">
                        <li class="w-[48px] h-[48px] mx-1 image_child" @click="changeImage" v-for="index in 6" :key="index">
                            <img
                                src="https://lh3.googleusercontent.com/835MfBqgcTVYh7g1zWDtJUFp2QnjeMswHm7JE_qLVp5mBAmR1Hep69EL3Jab4Dm6jyDaKBJIAKcfKqK4sQ=w500-rw"
                                alt=""
                            />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        changeImage(e){
            console.log(e.target);
            e.target.classList.add('active')
        },
    }
};
</script>
<style scoped>
.image_child {
    border: 1px solid #fff;
    border-radius: 2px;
}

.image_child.active {
    border: 1px solid  rgb(20, 53, 195);

   
}
</style>