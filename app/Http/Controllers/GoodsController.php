<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;

class GoodsController extends Controller
{
    function index()
    {
        $goods = Good::all();
        return view('welcome', ['goods' => $goods]);
    }

    static function product($id)
    {
        $good = Good::find($id);
        $cat = Category::find($good->category_id);
        return view('product', ['good' => $good, 'cat' => $cat]);
    }

    static function cat($id)
    {
        $goods = Good::where('category_id', $id)->get();
        $cat = Category::find($id);
        return view('category', ['goods' => $goods, 'cat' => $cat]);
    }
}
