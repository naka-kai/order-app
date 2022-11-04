<x-admin-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('注文管理') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <x-frame>
            <div class="bg-white h-auto w-4/12 sm:w-36 mx-10 my-4 flex justify-center items-center">
                <select id="countries"
                    class="bg-white border border-gray-300 text-gray-900 text-sm focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="all" selected>全て</option>
                    <option value="not_send">未返信</option>
                    <option value="wait_reply">返信待ち</option>
                    <option value="make">製作中</option>
                    <option value="hand_over">お渡し予定</option>
                    <option value="finish">取引完了</option>
                </select>
            </div>

            <div class="mx-10">
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
                        <p>お渡し日：<span>2022/10/01</span></p>
                    </div>
                </div>

                <div class="bg-white border border-gray-300 relative my-2">
                    <div
                        class="absolute top-0 right-0 py-2 px-3 bg-red-200 border border-t-0 border-r-0 border-gray-300">
                        <p>未返信</p>
                    </div>
                    <div class="p-2">
                        <p>問い合わせ日：2022/09/16</p>
                        <p class="pt-2"><span class="font-semibold">田中花子</span>様：<span class="font-bold">2</span>点</p>
                        <ol class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                            <li>マーブル(ブルー)</li>
                            <li>牛柄(レッド)</li>
                        </ol>
                        <p>お渡し日：<span>2022/10/01</span></p>
                    </div>
                </div>
            </div>
        </x-frame>
    </x-slot>

</x-admin-layout>
