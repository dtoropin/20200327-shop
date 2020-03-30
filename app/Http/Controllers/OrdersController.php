<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function index()
    {
        if (isset($_COOKIE['basket'])) {
            $idArray = json_decode($_COOKIE['basket']);
            $goods = Good::query()->find($idArray);
            $totalPrice = 0;
            $goodsList = [];
            foreach ($goods as $good) {
                $totalPrice += $good->price;
                array_push($goodsList, $good->name);
            }
            return view('orders', [
                'goods' => $goods,
                'totalPrice' => $totalPrice,
                'goodsList' => implode(',', $goodsList),
                'token' => csrf_token()
            ]);
        } else {
            return view('orders', ['goods' => []]);
        }
    }
}
