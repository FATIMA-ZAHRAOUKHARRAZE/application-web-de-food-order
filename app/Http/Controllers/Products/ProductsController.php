<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //
    public function singleCategory ($id)
    {
        $products=Product::select()->orderBy('id','desc')->where('category_id',$id)->get();
        return view('products.singleCategory',compact('products'));
    }
    public function singleProduct ($id)
    {
        $product=Product::find($id);
        $relatedProducts=Product::where('category_id',$product->category_id)->where('id','!=',$id)->get();
        return view('products.sigleProduct',compact('product','relatedProducts'));
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
        $product=Cart::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "quantite"=>$request->quantite,
            "image"=>$request->image,
            "pro_id"=>$request->pro_id,
            "user_id"=>Auth::user()->id,
        ]);
        echo " iteam add to cart";
        return view('products.sigleProduct',compact('product','relatedProducts'));
    }
}
