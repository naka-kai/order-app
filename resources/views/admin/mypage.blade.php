<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="text-gray-600 bg-gray-200 m-10 rounded-2xl py-5">
        <div class="flex flex-wrap justify-center">
            <div class="bg-white h-32 w-2/3 sm:w-2/5 mx-3 rounded-xl my-5 flex justify-center items-center">
                <i class="fa-solid fa-list mr-3 fa-2x"></i>
                <p class="h-full flex justify-center items-center text-3xl font-semibold">注文管理</p>
            </div>
            <div class="bg-white h-32 w-2/3 sm:w-2/5 mx-3 rounded-xl my-5 flex justify-center items-center">
                <i class="fa-solid fa-calendar-days mr-3 fa-2x"></i>
                <p class="h-full flex justify-center items-center text-3xl font-semibold">カレンダー</p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center">
            <div class="bg-white h-32 w-2/3 sm:w-2/5 mx-3 rounded-xl my-5 flex justify-center items-center">
                <i class="fa-solid fa-cart-shopping mr-3 fa-2x"></i>
                <p class="h-full flex justify-center items-center text-3xl font-semibold">商品一覧</p>
            </div>
            <div class="bg-white h-32 w-2/3 sm:w-2/5 mx-3 rounded-xl my-5 flex justify-center items-center">
                <i class="fa-solid fa-newspaper mr-3 fa-2x"></i>
                <p class="h-full flex justify-center items-center text-3xl font-semibold">お知らせ</p>
            </div>
        </div>
    </div>
</x-app-layout>
