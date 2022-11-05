<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <x-frame>
            <div class="flex flex-wrap justify-center">
                <x-mypage.item link="{{ route('admin.order_mng.index') }}" icon="fa-solid fa-list" menu="注文管理" />

                <x-mypage.item link="#" icon="fa-solid fa-calendar-days" menu="カレンダー" />
            </div>

            <div class="flex flex-wrap justify-center">
                <x-mypage.item link="#" icon="fa-solid fa-cart-shopping" menu="商品一覧" />

                <x-mypage.item link="#" icon="fa-solid fa-newspaper" menu="お知らせ" />
            </div>
        </x-frame>
    </x-slot>

</x-admin-layout>
