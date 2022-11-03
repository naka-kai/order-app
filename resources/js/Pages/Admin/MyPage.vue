<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
library.add(fas, far, fab)
</script>

<template>

    <Head title="MyPage" />

    <AdminAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                MyPage
            </h2>
        </template>

        <div class="text-gray-600">
            <div class="flex flex-wrap justify-center">
                <div class="bg-gray-100 h-32 w-full sm:w-2/5 mx-3 rounded-xl mt-5 flex justify-center items-center">
                    <font-awesome-icon icon="fa-solid fa-list" size="2x" class="mr-3" />
                    <p class="h-full flex justify-center items-center text-3xl font-semibold">注文管理</p>
                </div>
                <div class="bg-gray-100 h-32 w-full sm:w-2/5 mx-3 rounded-xl mt-5 flex justify-center items-center">
                    <font-awesome-icon icon="fa-solid fa-calendar-days" size="2x" class="mr-3" />
                    <p class="h-full flex justify-center items-center text-3xl font-semibold">カレンダー</p>
                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <div class="bg-gray-100 h-32 w-full sm:w-2/5 mx-3 rounded-xl mt-5 flex justify-center items-center">
                    <font-awesome-icon icon="fa-solid fa-cart-shopping" size="2x" class="mr-3" />
                    <p class="h-full flex justify-center items-center text-3xl font-semibold">商品一覧</p>
                </div>
                <div class="bg-gray-100 h-32 w-full sm:w-2/5 mx-3 rounded-xl mt-5 flex justify-center items-center">
                    <font-awesome-icon icon="fa-solid fa-newspaper" size="2x" class="mr-3" />
                    <p class="h-full flex justify-center items-center text-3xl font-semibold">お知らせ</p>
                </div>
            </div>
        </div>
    </AdminAuthenticatedLayout>
</template>
