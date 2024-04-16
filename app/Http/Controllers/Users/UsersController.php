<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product\Order;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class UsersController extends Controller
{
    //
    public function myOrders()
    {
        $orders=Order::select()->where('user_id',Auth::user()->id)->get();
     
        return view('users.myorders',compact('orders'));
    }

    public function settings()
    {   
        $users=User::find(Auth::user()->id);
        return view('users.settings',compact('users'));
    }
    public function updateUserSettings(Request $request,$id)
    {
        Request()->validate(["email"=>"required|max:40",
        "name"=>"required|max:40"]);
        $users=User::find($id);
        $users->update($request->all());
        if($users){
            return Redirect::route("users.settings")->with(['update'=> 'user updated successfully']);
        }
    }
}
