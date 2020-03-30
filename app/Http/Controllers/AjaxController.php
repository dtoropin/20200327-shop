<?php

namespace App\Http\Controllers;

use App\Good;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function index()
    {
        $goodsId = [];

        foreach (explode(',', $_POST['goods']) as $good) {
            $item = Good::where('name', $good)->first();
            array_push($goodsId, $item['id']);
        }

        $user = User::find($_POST['user_id']);
        $email = $user->email;

        Order::create([
            'user_id' => $_POST['user_id'],
            'user_email' => $email,
            'goods' => implode(',', $goodsId),
            'total' => $_POST['total'],
            'created_at' => date('Y-m-d')
        ]);
        return response()->json(array('msg' => $email), 200);
    }
}
