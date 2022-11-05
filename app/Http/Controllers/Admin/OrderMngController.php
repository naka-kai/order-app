<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreOrderMngRequest;
use App\Http\Requests\UpdateOrderMngRequest;
use App\Models\Admin\OrderMng;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class OrderMngController extends Controller
{
    /**
     * 管理者用 注文管理
     */

    // 一覧
    public function index()
    {
        return view('admin.order-mng.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderMngRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderMngRequest $request)
    {
        //
    }

    // 詳細
    public function show($id)
    {
        return view('admin.order-mng.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\OrderMng  $orderMng
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderMng $orderMng)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderMngRequest  $request
     * @param  \App\Models\Admin\OrderMng  $orderMng
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderMngRequest $request, OrderMng $orderMng)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\OrderMng  $orderMng
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderMng $orderMng)
    {
        //
    }
}
