<x-admin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('注文管理詳細') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <x-frame>
            <x-container>
                <div class="bg-white border border-gray-300 relative my-2">
                    <div
                        class="absolute top-0 right-0 py-2 px-3 bg-yellow-200 border border-t-0 border-r-0 border-gray-300">
                        <p>製作中</p>
                    </div>
                    <div class="p-2">
                        <p>問い合わせ日：2022/09/16</p>
                        <p class="pt-2"><span class="font-semibold">田中花子</span>様：<span class="font-bold">2</span>点</p>
                        <ol class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                            <li>マーブル(ブルー)</li>
                            <li>牛柄(レッド)</li>
                        </ol>
                        <p>お渡し日：2022/10/01</p>
                        <p>ご要望：要望要望要望要望要望要望要望要望要望要望要望要望要望要望要望要望要望要望</p>
                        <p>メモ：メモメモメモメモメモメモメモメモメモメモ</p>
                    </div>
                </div>

                <div class="bg-blue-200 p-3 my-5 rounded-xl relative balloon-right">
                    <p class="font-semibold text-lg">むくたろう</p>
                    <div>
                        お問い合わせありがとうございます。<br>
                        <br>
                        <ol class="mt-2 space-y-1 list-decimal list-inside">
                            <li>マーブル(ブルー)</li>
                            <li>牛柄(レッド)</li>
                        </ol>
                        上記2点で承りました。<br>
                        <br>
                        発送の際にまたご連絡させていただきます。<br>
                        引き続きよろしくお願いいたします。<br>
                    </div>
                </div>

                <div class="bg-pink-100 p-3 my-5 rounded-xl relative balloon-left">
                    <p class="font-semibold text-lg">田中花子様</p>
                    <div>
                        よろしくお願いいたします。<br>
                    </div>
                </div>
            </x-container>
        </x-frame>
    </x-slot>

</x-admin-layout>
