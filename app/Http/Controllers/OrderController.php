<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer($id, $name, $address)
    {
        return view('customer', compact('id', 'name', 'address'));
    }

    public function item($id, $name, $price)
    {
        return view('item', compact('id', 'name', 'price'));
    }

    public function order($cid, $cname, $orderno, $date)
    {
        return view('order', compact('cid', 'cname', 'orderno', 'date'));
    }

    public function orderDetails($transno, $orderno, $itemid, $name, $price, $qty)
    {
        return view('order_detail', compact('transno', 'orderno', 'itemid', 'name', 'price', 'qty'));
    }
}
