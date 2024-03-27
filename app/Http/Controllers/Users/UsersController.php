<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product\Order;
class UsersController extends Controller
{
    //
    public function myOrders()
    {
        $orders=Order::select()->where('user_id',Auth::user()->id)->get();
     
        return view('users.myorders',compact('orders'));
    }
}
