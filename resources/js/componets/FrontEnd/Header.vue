<template>
    <div class="h-[42px] main-bg hidden lg:block">
        <div class="container mx-auto h-full items-center flex justify-between">
            <div class="xl:w-[100px] lg:w-0 "></div>
            <a :href="item.type =='link' ? item.link : `tel:${item.link}`"
               class="flex flex-row text-white text-[13px] font-semibold"
               v-for="(item, index) in navItems" :key="index">
                <mdicon width="24" height="24" :name="item.icon"/>
                <p class="ml-2">{{ item.text }}</p>
            </a>
        </div>

    </div>
    <div class="fixed top-[60px] left-0 right-0 w-full bg-white lg:hidden transition-all z-[1040] duration-100 visible"
         :class="{'invisible transition-all': !isActive}">
        <div class="w-full">
            <div class="pt-1 px-6 md:px-12 pb-2" @click = "isDropDownMenu = !isDropDownMenu">
                <div class="flex items-center border-b-1 cursor-pointer">
                    <div class="w-[48px] h-[48px] p-2 mr-4 overflow-hidden border">
                        <img :src="notifies[0].image" alt="">
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-[15px] text-gray-800">Lương Ba</p>
                        <p class="text-ellipsis overflow-hidden text-[13px] break-words font-semibold text-gray-600"
                           style="display: -webkit-box;
                               -webkit-line-clamp: 2;
                               line-clamp: 2;
                               -webkit-box-orient: vertical;">
                            a2k10lnc@gmail.com
                        </p>

                    </div>
                    <div>
                        <mdicon width="24" height="24" name="MenuDown"/>
                    </div>

                </div>
            </div>
            <ul class="w-full md:px-12  max-h-0 overflow-hidden px-6 duration-200 ease-linear" :class="{'pt-2 px-6 md:px-12 pb-2 max-h-[9999px]  ease-linear  duration-300': isDropDownMenu}">
                <li class=" hover:bg-gray-100">
                    <a href="#" class="flex text-gray-600 text-[13px] py-2">
                        <mdicon width="20" height="20" name="AccountCircleOutline"/>
                        <span class="ml-3">Thông tin tài khoản</span>
                    </a>
                </li>
                <li class="hover:bg-gray-100">
                    <a href="#" class="flex text-gray-600 text-[13px] py-2">
                        <mdicon width="20" height="20" name="ClipboardListOutline"/>
                        <span class="ml-3">Quản lý đơn hàng</span>
                    </a>
                </li>
                <li class=" hover:bg-gray-100">
                    <a href="#" class="flex text-gray-600 text-[13px] py-2">
                        <mdicon width="20" height="20" name="ArchiveMarkerOutline"/>
                        <span class="ml-3">Sổ địa chỉ</span>
                    </a>
                </li>
                <li class=" hover:bg-gray-100">
                    <a href="#" class="flex text-gray-600 text-[13px] py-2">
                        <mdicon width="20" height="20" name="BellOutline"/>
                        <span class="ml-3">Thông báo</span>
                    </a>
                </li>
                <li class="hover:bg-gray-100">
                    <a href="#" class="flex text-gray-600 text-[13px] py-2">
                        <mdicon width="20" height="20" name="Newspaper"/>
                        <span class="ml-3">Bản tin</span>
                    </a>
                </li>
            </ul>
            <div class="pt-3 px-6 md:px-12 pb-6 flex flex-center">

                <form
                    class="relative bg-[rgb(245,245,245)] relative w-full h-[41px] flex items-center pl-4 pr-[52px] rounded-lg border flex lg:hidden">
                    <input class="bg-[transparent] outline-none w-full text-[13px]" type="text"
                           placeholder="Nhập từ khóa tìm kiếm">
                    <button
                        class="main-bg text-white h-[36px] w-[36px] border-none outline-none rounded-lg flex-center absolute right-0 top-[50%] translate-y-[-50%]">
                        <mdicon width="24" height="24" name="Magnify"/>
                    </button>
                </form>
            </div>
            <div class="main-bg pt-3 px-6 md:px-12 pb-6 grid grid-rows-6 md:grid-rows-2 grid-flow-col md:gap-4 gap-3">
                <a :href="item.type =='link' ? item.link : `tel:${item.link}`"
                   class="flex flex-row text-white text-[13px] font-semibold"
                   v-for="(item, index) in navItems" :key="index">
                    <mdicon width="24" height="24" :name="item.icon"/>
                    <p class="ml-2">{{ item.text }}</p>
                </a>
            </div>

        </div>
    </div>
    <div class="bg-white sticky top-0 left-0 right-0 z-[1040]">
        <div class="container mx-auto flex justify-between h-[60px] lg:h-[88px] items-center">
            <div @click="isActive = !isActive" :class="{'is-active': isActive}" class="menu-toggle lg:hidden">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="invisible ml-4 lg:hidden">
                <mdicon width="24" height="24" name="Menu"/>
            </div>
            <a href="#" class="w-auto h-[24px] md:h-[35px] flex-1 lg:flex-none">
                <img class="w-full h-full" src="./logo/logo-full.svg" alt="">
            </a>
            <form
                class="relative bg-[rgb(245,245,245)] relative w-[518px] h-[41px] flex items-center pl-4 pr-[52px] rounded-lg border hidden lg:flex">
                <input class="bg-[transparent] outline-none w-full text-[13px]" type="text"
                       placeholder="Nhập từ khóa tìm kiếm">
                <button
                    class="main-bg text-white h-[36px] w-[36px] border-none outline-none rounded-lg flex-center absolute right-0 top-[50%] translate-y-[-50%]">
                    <mdicon width="24" height="24" name="Magnify"/>
                </button>
            </form>
            <a class="flex items-center text-gray-500 cursor-pointer hover:main-color text-[13px] hidden lg:flex"
               v-if="!isLogin">
                <mdicon width="36" height="36" name="AccountCircleOutline"/>
                <div class="flex flex-col ml-3">
                    <p class="font-semibold">Đăng nhập</p>
                    <p class="font-semibold">Đăng ký</p>
                </div>
            </a>
            <div class="relative group">
                <div class="flex items-center text-gray-500 cursor-pointer hover:main-color text-[13px] hidden lg:flex"
                     v-else>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSK1By-eOJ2eoWEaCdMrvVPV3Fn0uSxI8pZQ&usqp=CAU"
                        class="w-[36px] h-[36px] rounded-full" alt="">
                    <div class="flex flex-col ml-3">
                        <p class="font-semibold">Xin chào</p>
                        <p class="font-semibold">Lương Ba</p>
                    </div>
                </div>
                <div
                    class="absolute w-[260px] bg-white absolute left-[50%] translate-x-[-50%] rounded-lg max-h-[500px] hidden group-hover:block
                     shadow-lg overflow-y-scroll">
                    <div class="flex items-center border-b-1 px-4 py-2 cursor-pointer"

                         v-else>
                        <div class="w-[48px] h-[48px] p-2 mr-4 overflow-hidden border">
                            <img :src="notifies[0].image" alt="">
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-[15px] text-gray-800">Lương Ba</p>
                            <p class="text-ellipsis overflow-hidden text-[13px] break-words font-semibold text-gray-600"
                               style="display: -webkit-box;
                               -webkit-line-clamp: 2;
                               line-clamp: 2;
                               -webkit-box-orient: vertical;">
                                a2k10lnc@gmail.com
                            </p>

                        </div>

                    </div>
                    <ul class="w-full">
                        <li class="py-2 px-4 hover:bg-gray-100 mb-2">
                            <a href="#" class="flex text-gray-600 text-[13px]">
                                <mdicon width="20" height="20" name="AccountCircleOutline"/>
                                <span class="ml-3">Thông tin tài khoản</span>
                            </a>
                        </li>
                        <li class="py-2 px-4 hover:bg-gray-100 mb-2">
                            <a href="#" class="flex text-gray-600 text-[13px]">
                                <mdicon width="20" height="20" name="ClipboardListOutline"/>
                                <span class="ml-3">Quản lý đơn hàng</span>
                            </a>
                        </li>
                        <li class="py-2 px-4 hover:bg-gray-100 mb-2">
                            <a href="#" class="flex text-gray-600 text-[13px]">
                                <mdicon width="20" height="20" name="ArchiveMarkerOutline"/>
                                <span class="ml-3">Sổ địa chỉ</span>
                            </a>
                        </li>
                        <li class="py-2 px-4 hover:bg-gray-100 mb-2">
                            <a href="#" class="flex text-gray-600 text-[13px]">
                                <mdicon width="20" height="20" name="BellOutline"/>
                                <span class="ml-3">Thông báo</span>
                            </a>
                        </li>
                        <li class="py-2 px-4 hover:bg-gray-100 mb-2">
                            <a href="#" class="flex text-gray-600 text-[13px]">
                                <mdicon width="20" height="20" name="Newspaper"/>
                                <span class="ml-3">Bản tin</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex">


                <div class="group relative contentshow" @click="hiddenMenu()">
                    <div class="text-gray-500 cursor-pointer hover:main-color" :class="isNotify ? 'main-color' : ''"
                    >
                    <mdicon width="24" height="24" name="BellOutline"/>
                </div>
                <div v-if="notifies.length > 0"
                     class="absolute right-[-5px] top-[-5px] w-3 h-3 rounded-full bg-red-600 text-white text-[8px] text-center">
                    {{ notifies.length }}
                </div>
                <div
                    class="w-full md:absolute left-0 md:top-[138%] md:left-[inherit] fixed md:w-[400px] z-[1039] bg-white right-[0%] rounded-lg md:max-h-[500px]  hidden group-hover:block
                     shadow-lg overflow-y-scroll">
                    <a v-if="notifies.length < 1"
                       class="text-[13px] text-gray-400 hover:text-gray-600 font-semibold text-center block"
                       href="#">Xem
                        tất cả thông báo</a>
                    <div class="flex items-center border-b-1 px-4 py-2 cursor-pointer"
                         :class="[noti.isChuaDoc ? 'bg-gray-100' : 'bg-white', noti.id == notifies.length ? '' : 'mb-4']"
                         v-else v-for="(noti, index) in notifies"
                         :key="index">
                        <div class="w-[48px] h-[48px] md:w-[64px] md:h-[64px] border rounded-full p-2 mr-4 overflow-hidden">
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
            <div class="relative group ml-6 contentshow" @click="hiddenMenu()">
                <div class="flex items-center text-gray-500 cursor-pointer hover:main-color text-[13px]">
                    <mdicon width="24" height="24" name="CartMinus"/>

                </div>
                <div v-if="carts.length > 0"
                     class="absolute right-[-5px] top-[-5px] w-3 h-3 rounded-full bg-red-600 text-white text-[8px] text-center">
                    {{ carts.length }}
                </div>
                <div
                    class="w-full fixed left-0 md:top-[138%] md:left-[inherit] md:absolute md:w-[400px] bg-white right-[0%] z-[1039] rounded-lg shadow-lg md:max-h-[500px] h-[400px] hidden group-hover:block
                      overflow-y-scroll" :class="carts.length < 1 ? 'flex flex-col justify-center' : ''">
                    <div class="w-full max-h-[300px] border-b-2 px-2 border-dashed"
                         :class="carts.length < 1 ? '' : 'overflow-y-scroll'">
                        <img v-if="carts.length < 1"
                             class="w-[186px] h-[186px] mx-auto"
                             src="https://truonggiang.vn/wp-content/plugins/isures-buildpc-for-woocomerce/public/images/empty-chosen.jpg"/>
                        <div class="flex items-center border-b-1 px-4 py-2 cursor-pointer hover:bg-gray-100"
                             :class="[ cart.id == carts.length ? '' : 'mb-2']"
                             v-else v-for="(cart, index) in carts"
                             :key="index">
                            <div class=" w-[64px] h-[64px] md:w-[78px] md:h-[78px]  border p-2 mr-4 overflow-hidden">
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
                            <p class="font-semiboldbold text-[15px]">Tổng tiền ({{ carts.length }}) sản phẩm</p>
                            <p class="font-bold text-[15px]">{{ TongTien }} đồng</p>
                        </div>
                        <button-app title="Xem giỏ hàng"></button-app>
                    </div>


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
            isActive: false,
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
            ],
            isLogin: true,
            isDropDownMenu: false,

        }

    },
    computed: {
        TongTien() {
            return this.carts.reduce((tong, item) => {
                return tong += parseFloat(item.price) * item.amount;
            }, 0);
        }

    },
    methods: {
        hiddenMenu() {
            this.isActive = false;
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

.menu-toggle {
    position: relative;
    width: 36px;
    height: 36px;
    cursor: pointer;
}

.menu-toggle span {
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 16px;
    height: 2px;
    background-color: rgb(107 114 128);
    transform: translate3d(-50%, -50%, 0);
    transition: all .3s;
}

.menu-toggle span:first-of-type {
    top: calc(50% - 5px);
}

.menu-toggle span:nth-of-type(3) {
    top: calc(50% + 5px);
}

.menu-toggle.is-active span:first-of-type {
    top: calc(50% - 1px);
    left: calc(50% - 8px);
    transform: translateZ(0) rotate(45deg);
}

.menu-toggle.is-active span:nth-of-type(2) {
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
}

.menu-toggle.is-active span:nth-of-type(3) {
    top: calc(50% - 1px);
    left: calc(50% - 8px);
    transform: translateZ(0) rotate(-45deg);
}

</style>
