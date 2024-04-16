<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product\Cart;
use App\Models\Product\Category;
use App\Models\product\Order;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Products\Session;
use Illuminate\Contracts\Session\Session as SessionSession;

class ProductsController extends Controller
{
    //
    public function singleCategory ($id)
    {
        $products=Product::select()->orderBy('id','desc')->where('category_id',$id)->get();
        return view('products.singleCategory',compact('products'));
    }
    public function singleProduct ($id)
    {$product=Product::find($id);
        $relatedProducts=Product::where('category_id',$product->category_id)->where('id','!=',$id)->get();
        if(isset (auth::user()->id)) {
            
            $ceckInCart=Cart::where('pro_id',$id)->where('user_id',Auth::user()->id)->count();
            return view('products.sigleProduct',compact('product','relatedProducts','ceckInCart'));
        }else {
            return view('products.sigleProduct',compact('product','relatedProducts'));

        }
        
    }
    public function shop()
    {
        $categories=Category::select()->orderBy('id','desc')->get();
        $mostwanted=Product::select()->orderBy('name','desc')->take(5)->get();
        $vegetables= Product::select()->where('category_id','=',5)->orderBy('id','desc')->take(5)->get();
        $meats= Product::select()->where('category_id','=',3)->orderBy('id','desc')->take(5)->get();
        $fruits= Product::select()->where('category_id','=',1)->orderBy('id','desc')->take(5)->get();
        $fishes= Product::select()->where('category_id','=',2)->orderBy('id','desc')->take(5)->get();

        return view('products.shop',compact('categories','mostwanted','vegetables','fishes','fruits','meats'));
    }
    public function addToCart(Request $request)
    {
        $addcart=Cart::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "quantite"=>$request->quantite,
            "image"=>$request->image,
            "pro_id"=>$request->pro_id,
            "user_id"=>Auth::user()->id,
            "subtotal"=>$request->quantite*$request->price,
        ]);
        if($addcart){
            return Redirect::route("single.Product",$request->pro_id)->with(['success' => 'le produit est ajouter dans cart']);
        }
        
    }
    public function Cart()
    {
        $carts=Cart::select()->where('user_id',Auth::user()->id)->get();
        $subtotal= Cart::where('user_id',Auth::user()->id)->sum('subtotal');
        return view('products.cart',compact('carts','subtotal'));
    }
     public function deleteFromCart($id)
    {
        $deletecart=Cart::find($id);
        $deletecart->delete();
        if($deletecart){
            return Redirect::route("products.cart")->with(['delete' => 'le produit est supprimer dans cart']);
        }
    }
    public function prepareCheckout(Request $request)
    {
        $price=$request->price;
        $value=session()->put('value', $price);
        $newPrice=session()->get($value);
        if($newPrice>0){
            return Redirect::route("products.checkout");
        }
    }
    public function Checkout()
    {
        $cartitems=Cart::select()->where('user_id',Auth::user()->id)->get();
        $checkouttotal=Cart::select()->where('user_id',Auth::user()->id)->sum('subtotal');
        
        return view('products.checkout',compact('cartitems','checkouttotal'));
    }
    public function proccessCheckout(Request $request)
    {
        $addcart=Order::create([
            "name"=>$request->name,
            "last_name"=>$request->last_name,
            "address"=>$request->address,
            "town"=>$request->town,
            "state"=>$request->state,
            "zip_code"=>$request->zip_code,
            "email"=>$request->email,
            "phone_number"=>$request->phone_number,
            "price"=>$request->price,
            "user_id"=>$request->user_id,
            "order_note"=>$request->order_note,
           
        ]);
        if($addcart){
            return Redirect::route("products.pay");
        }
        
    }
    public function paywithPaypal()
    {
        $deleteItemsFromCart=Cart::where('user_id',Auth::user()->id);
        $deleteItemsFromCart->delete();
        return view('products.pay');
        if($deleteItemsFromCart)
        {
           session()->forget('value');
            return view("products.success");
        }
        
    }
}
