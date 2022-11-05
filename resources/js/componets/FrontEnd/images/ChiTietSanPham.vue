<template >
    <div class="w-full grid grid-cols-7 gap-2 relative">
        <div class="absolute inset-0 z-[-2] overflow-hidden">
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
            <svg id="anime-svg" width="1000" height="500">
                <circle cx="300" cy="100" r="250" fill="none" />
            </svg>
        </div>
        <div class="bg-anime rounded-sm p-4 col-span-5">
            <div class="flex justify-between">
                <div class="flex flex-col w-[40%] justify-center">
                    <div class="w-full cursor-pointer">
                        <img :src="mainImg" class="w-full" alt="" />
                    </div>
                    <div>
                        <ul class="flex">
                            <li
                                class="
                                    w-[48px]
                                    h-[48px]
                                    mx-1
                                    image_child
                                    cursor-pointer
                                "
                                :class="index == 1 ? 'active' : ''"
                                @mouseover.stop="changeImage(index, $event)"
                                v-for="index in 6"
                                :key="index"
                            >
                                <img
                                    src="./images/mouse.png"
                                    alt=""
                                />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <h2 class="text-gray-800 text-[24px] font-[500]">
                        Chuột không dây Logitech M650 (Đen) (910-006262)
                    </h2>
                    <p class="text-[14px] text-gray-400">
                        Thương hiệu
                        <span class="main-color">LOGITECH</span>
                    </p>
                    <p
                        class="
                            text-[12px] text-gray-600
                            font-[500]
                            uppercase
                            mt-2
                        "
                    >
                        Màu sắc: Đen
                    </p>
                    <ul class="flex mt-2">
                        <li
                            class="
                                text-gray-800
                                font-[500]
                                text-[14px]
                                px-4
                                py-2
                                rounded-md
                                border border-main-color
                                cursor-pointer
                                mr-2
                            "
                        >
                            Trắng
                        </li>
                        <li
                            class="
                                text-gray-800
                                font-[500]
                                text-[14px]
                                px-4
                                py-2
                                rounded-md
                                border
                                cursor-pointer
                                mr-2
                            "
                        >
                            Đen
                        </li>
                        <li
                            class="
                                text-gray-800
                                font-[500]
                                text-[14px]
                                px-4
                                py-2
                                rounded-md
                                border
                                cursor-pointer
                                mr-2
                            "
                        >
                            Hồng
                        </li>
                    </ul>
                    <p class="main-color text-[20px] font-semibold mt-4">
                        649.000 đ
                    </p>
                    <div class="flex">
                        <p class="text-gray-400 text-[12px] line-through">
                            649.000 đ
                        </p>
                        <p class="main-color ml-2 text-[12px] font-[500]">
                            -23.6%
                        </p>
                    </div>
                    <p class="border-b border-dashed mt-4"></p>
                    <div class="mt-4" v-html="description"></div>
                </div>
            </div>
        </div>
        <div class="ml-4 flex-1 rounded-sm col-span-2">
            <div class="bg-anime p-4">
                <p class="text-[15px] text-gray-800 font-[500]">
                    Chính sách bán hàng
                </p>
                <div class="flex items-center mt-2">
                    <mdicon
                        name="TruckCargoContainer"
                        width="24"
                        height="24"
                        class="main-color"
                    />
                    <p class="text-[13px] text-gray-800 ml-2">
                        Miễn phí giao hàng cho đơn hàng từ 800K
                    </p>
                </div>
                <div class="flex items-center mt-2">
                    <mdicon
                        name="ShieldCheckOutline"
                        width="24"
                        height="24"
                        class="main-color"
                    />
                    <p class="text-[13px] text-gray-800 ml-2">
                        Cam kết chính hãng 100%
                    </p>
                </div>
                <div class="flex items-center mt-2">
                    <mdicon
                        name="CashSync"
                        width="24"
                        height="24"
                        class="main-color"
                    />
                    <p class="text-[13px] text-gray-800 ml-2">
                        Hoàn tiền hoặc đổi mới hoàn toàn nếu phát hiện hàng bị
                        lỗi do nhà sản xuất
                    </p>
                </div>
                <p class="text-[15px] text-gray-800 font-[500] mt-4">
                    Dịch vụ khác
                </p>
                <div class="flex items-center mt-2">
                    <mdicon
                        name="CogOutline"
                        width="24"
                        height="24"
                        class="main-color"
                    />
                    <p class="text-[13px] text-gray-800 ml-2">
                        Sửa chữa đồng giá 150.000đ.
                    </p>
                </div>
                <div class="flex items-center mt-2">
                    <mdicon
                        name="Laptop"
                        width="24"
                        height="24"
                        class="main-color"
                    />
                    <p class="text-[13px] text-gray-800 ml-2">
                        Vệ sinh máy tính, laptop.
                    </p>
                </div>
                <div class="flex items-center mt-2">
                    <mdicon
                        name="ShieldCheckOutline"
                        width="24"
                        height="24"
                        class="main-color"
                    />
                    <p class="text-[13px] text-gray-800 ml-2">
                        Bảo hành tại nhà.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { translate } from "../animate/animate";
export default {
    data() {
        return {
            mainImg:
                "./images/mouse-big.png",
            description:
                '<p class="text-[14px] leading-[1.25rem] text-gray-800">- Tính năng theo dõi quang học nâng cao của Logitech</p> <p class="text-[14px] leading-[1.25rem] text-gray-800">- Phạm vi không dây 10 m</p> <p class="text-[14px] leading-[1.25rem] text-gray-800">- Tương thích: macOS 10.14 trở lên và Windows 10, 11 trở lên</p>',
        };
    },
    methods: {
        changeImage(index, e) {
            let liItem = document.getElementsByClassName("image_child");
            let tagName = e.target.tagName;
            if (tagName == "IMG") {
                this.mainImg = e.target.src;
            }
            liItem[index - 1].classList.add("active");
            for (let i = 0; i < liItem.length; i++) {
                if (index - 1 != i) {
                    liItem[i].classList.remove("active");
                }
            }
        },
        go() {
            translate(this.$refs.square);
        },
    },
    mounted() {
        this.go();
    },
};
</script>

<style scoped>
.image_child {
    border: 1px solid #fff;
    border-radius: 2px;
}

.image_child.active {
    border: 1px solid rgb(20, 53, 195);
}

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
    background: linear-gradient(to top left, #dc2430 0%, #fff 100%);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(20px);
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
    background: linear-gradient(to top left, #FFF94C 0%, #fff 100%);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(50px);
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
    background: linear-gradient(to top left, #00c6ff 0%, #fff 100%);
    transform: translate3d(0px, 20px, 0) scale(0.95);
    filter: blur(30px);
    opacity: var(0.7);
    transition: opacity 0.3s;
}
</style>