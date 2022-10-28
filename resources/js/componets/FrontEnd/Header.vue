<template>
    <div class="h-[42px] main-bg ">
        <div class="container mx-auto h-full items-center flex justify-between">
            <div class="w-[100px]"></div>
            <a :href="item.type =='link' ? item.link : `tel:${item.link}`"
               class="flex flex-row text-white text-[13px] font-semibold"
               v-for="(item, index) in navItems" :key="index">
                <mdicon width="24" height="24" :name="item.icon"/>
                <p class="ml-2">{{ item.text }}</p>
            </a>
        </div>

    </div>
    <div class="bg-white sticky top-0 left-0 right-0 z-[1040]">
        <div class="container mx-auto flex justify-between h-[88px] items-center">
            <a href="#" class="w-auto h-[35px]">
                <img class="w-full h-full" src="https://phongvu.vn/phongvu/logo-full.svg" alt="">
            </a>
            <form
                class="relative bg-[rgb(245,245,245)] relative w-[518px] h-[41px] flex items-center pl-4 pr-[52px] rounded-lg border">
                <input class="bg-[transparent] outline-none w-full text-[13px]" type="text"
                       placeholder="Nhập từ khóa tìm kiếm">
                <button
                    class="main-bg text-white h-[36px] w-[36px] border-none outline-none rounded-lg flex-center absolute right-0 top-[50%] translate-y-[-50%]">
                    <mdicon width="24" height="24" name="Magnify"/>
                </button>
            </form>
            <a class="flex items-center text-gray-500 cursor-pointer hover:main-color text-[13px]">
                <mdicon width="36" height="36" name="AccountCircleOutline"/>
                <div class="flex flex-col ml-3">
                    <p class="font-semibold">Đăng nhập</p>
                    <p class="font-semibold">Đăng ký</p>
                </div>
            </a>

            <div class="group relative">
                <div class="text-gray-500 cursor-pointer hover:main-color" :class="isNotify ? 'main-color' : ''"
                     @click="showPopupNotify()">
                    <mdicon width="36" height="36" name="BellOutline"/>
                </div>

                <div
                    v-if="isNotify"
                    class="absolute w-[400px] bg-white absolute right-[0%] rounded-lg max-h-[500px]
                     shadow-lg overflow-y-scroll">
                    <a v-if="notifies.length < 1"
                       class="text-[13px] text-gray-400 hover:text-gray-600 font-semibold text-center block" href="#">Xem
                        tất cả thông báo</a>
                    <div class="flex items-center border-b-1 px-4 py-2 cursor-pointer"
                         :class="[noti.isChuaDoc ? 'bg-gray-100' : 'bg-white', noti.id == notifies.length ? '' : 'mb-4']"
                         v-else v-for="(noti, index) in notifies"
                         :key="index">
                        <div class="w-[64px] h-[64px] border rounded-full p-2 mr-4 overflow-hidden">
                            <img :src="noti.image" alt="">
                        </div>
                        <div class="flex-1">

                            <p class="font-bold text-[13px]">{{ noti.title }}</p>
                            <p class="text-ellipsis overflow-hidden text-[13px] break-words"
                               style="display: -webkit-box;
                               -webkit-line-clamp: 2;
                               line-clamp: 2;
                               -webkit-box-orient: vertical;">
                                {{ noti.description }}
                            </p>
                            <p class="font-semibold text-gray-600 text-[13px] text-end">{{ noti.timeStamp }}</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="flex items-center text-gray-500 cursor-pointer hover:main-color text-[13px]"
                     :class="isGioHang ? 'main-color' : ''"
                     @click="showPopupGioHang">
                    <mdicon width="36" height="36" name="CartMinus"/>
                    <div class="flex flex-col ml-3">
                        <p class="font-semibold">Giỏ hàng của bạn</p>
                        <p class="font-semibold">(0) sản phẩm</p>
                    </div>

                </div>
                <div
                    v-if="isGioHang"
                    class="absolute w-[400px] bg-white absolute right-[0%] rounded-lg shadow-lg max-h-[500px] h-[400px]
                      overflow-y-scroll" :class="carts.length < 1 ? 'flex flex-col justify-center' : ''">
                    <div class="w-full max-h-[300px] border-b-2 px-2 border-dashed" :class="carts.length < 1 ? '' : 'overflow-y-scroll'">
                        <img v-if="carts.length < 1"
                             class="w-[186px] h-[186px] mx-auto"
                             src="https://truonggiang.vn/wp-content/plugins/isures-buildpc-for-woocomerce/public/images/empty-chosen.jpg"/>
                        <div class="flex items-center border-b-1 px-4 py-2 cursor-pointer"
                             :class="[ cart.id == carts.length ? '' : 'mb-2']"
                             v-else v-for="(cart, index) in carts"
                             :key="index">
                            <div class="w-[78px] h-[78px] border p-2 mr-4 overflow-hidden">
                                <img :src="cart.image" alt="">
                            </div>
                            <div class="flex-1">

                                <p class="font-bold text-[13px] text-gray-600">{{ cart.name }}</p>
                                <p class="text-ellipsis overflow-hidden text-[12px] break-words text-gray-400 text-[13px] font-semibold"
                                   style="display: -webkit-box;
                               -webkit-line-clamp: 2;
                               line-clamp: 2;
                               -webkit-box-orient: vertical;">
                                    Số lượng: x{{ cart.amount }}
                                </p>
                                <p class="font-bold text-[13px] text-gray-600">{{ cart.price }} đồng</p>
                            </div>

                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 p-2">
                        <div class="flex justify-between my-4" v-if="carts.length > 0">
                            <p class="font-semiboldbold text-[15px]">Tổng tiền ({{carts.length}}) sản phẩm</p>
                            <p class="font-bold text-[15px]">{{ TongTien }} đồng</p>
                        </div>
                        <button-app title="Xem giỏ hàng"></button-app>
                    </div>


                </div>
            </div>

        </div>
    </div>
</template>
<script>
import moment from 'moment';
import ButtonApp from "./Button"
export default {
    components: {
        ButtonApp
    },
    data() {
        return {
            navItems: [
                {
                    type: "link",
                    icon: 'TicketPercentOutline',
                    text: "Khuyến mãi",
                    link: "google.com"
                },
                {
                    type: "link",
                    icon: 'City',
                    text: "Hệ thống Showroom",
                    link: "google.com"
                },
                {
                    type: "phone",
                    icon: 'Headphones',
                    text: "Tư vấn mua hàng: 1800 6867",
                    link: "0961545114"
                },
                {
                    type: "phone",
                    icon: 'Headphones',
                    text: "CSKH: 1800 6865",
                    link: "0961545114"
                },
                {
                    type: "link",
                    icon: 'MonitorScreenshot',
                    text: "Tin công nghệ",
                    link: "google.com"
                },
                {
                    type: "link",
                    icon: 'WrenchOutline',
                    text: "Xây dựng cấu hình",
                    link: "google.com"
                },


            ],
            isNotify: false,
            isGioHang: false,
            notifies: [
                {
                    id: '1',
                    'image': 'https://lh3.googleusercontent.com/9VuDtVTE_RvRusFv4YCxFwhZ9XSMbmKqgtHoOy73THsg1uJahr0vp2qOZ2mtR2op0rOUUS1hUtmKPgXwp8jK9AgTiHYgbK9zyg=w300-rw',
                    'title': 'Sản phẩm mới đã có mặt tại phong vũ cơ sở 2',
                    'description': 'Những sản phẩm siêu hot sẽ có mặt tại hội chợ thương mai Trung tâm thái nguyên, các bạn hãy chú ý đến xem nhé!',
                    'timeStamp': moment(new Date('2022-10-15T00:00:00+00:00'), "YYYYMMDD").fromNow(),
                    isChuaDoc: true
                },
                {
                    id: '2',
                    'image': 'https://lh3.googleusercontent.com/9VuDtVTE_RvRusFv4YCxFwhZ9XSMbmKqgtHoOy73THsg1uJahr0vp2qOZ2mtR2op0rOUUS1hUtmKPgXwp8jK9AgTiHYgbK9zyg=w300-rw',
                    'title': 'Sản phẩm mới đã có mặt tại phong vũ cơ sở 2',
                    'description': 'Những sản phẩm siêu hot sẽ có mặt tại hội chợ thương mai Trung tâm thái nguyên, các bạn hãy chú ý đến xem nhé!',
                    'timeStamp': moment(new Date('2022-10-15T00:00:00+00:00'), "YYYYMMDD").fromNow(),
                    isChuaDoc: false
                },


            ],
            carts: [
                {
                    id: '1',
                    'image': 'https://lh3.googleusercontent.com/9VuDtVTE_RvRusFv4YCxFwhZ9XSMbmKqgtHoOy73THsg1uJahr0vp2qOZ2mtR2op0rOUUS1hUtmKPgXwp8jK9AgTiHYgbK9zyg=w300-rw',
                    'name': 'Chuột không dây Akko Smart 1 Sailor Venus',
                    'amount': 1,
                    'price': "269000",
                },
                {
                    id: '2',
                    'image': 'https://lh3.googleusercontent.com/9VuDtVTE_RvRusFv4YCxFwhZ9XSMbmKqgtHoOy73THsg1uJahr0vp2qOZ2mtR2op0rOUUS1hUtmKPgXwp8jK9AgTiHYgbK9zyg=w300-rw',
                    'name': 'Chuột không dây Akko Smart 1 Sailor Venus',
                    'amount': 1,
                    'price': "269000",
                },
                {
                    id: '3',
                    'image': 'https://lh3.googleusercontent.com/9VuDtVTE_RvRusFv4YCxFwhZ9XSMbmKqgtHoOy73THsg1uJahr0vp2qOZ2mtR2op0rOUUS1hUtmKPgXwp8jK9AgTiHYgbK9zyg=w300-rw',
                    'name': 'Chuột không dây Akko Smart 1 Sailor Venus',
                    'amount': 1,
                    'price': "269000",
                },
                {
                    id: '4',
                    'image': 'https://lh3.googleusercontent.com/9VuDtVTE_RvRusFv4YCxFwhZ9XSMbmKqgtHoOy73THsg1uJahr0vp2qOZ2mtR2op0rOUUS1hUtmKPgXwp8jK9AgTiHYgbK9zyg=w300-rw',
                    'name': 'Chuột không dây Akko Smart 1 Sailor Venus',
                    'amount': 1,
                    'price': "269000",
                },
            ]

        }

    },
    computed: {
        TongTien(){
            return this.carts.reduce((tong, item)=> {
                return tong += parseFloat(item.price) * item.amount;
            },0);
        }

    },
    methods: {
        showPopupGioHang() {
            this.isNotify = false;
            this.isGioHang = !this.isGioHang;
        },
        showPopupNotify() {
            this.isGioHang = false;
            this.isNotify = !this.isNotify;
        },

    }
}
</script>

<style scoped>
::-webkit-scrollbar {
    width: 2px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}

</style>
