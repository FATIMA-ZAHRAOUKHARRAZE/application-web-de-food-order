<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Product\Category;
use App\Models\product\Order;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Backtrace\File;

class AdminsController extends Controller
{
    //
    public function viewLogin()
    {
        return view('admins.login');
    }
    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
       
    }
    public function index()
    {
        $productsCount=Product::select()->count();
        $ordersCount=Order::select()->count();
        $categorieCount=Category::select()->count();
        $adminCount=Admin::select()->count();
        return view('admins.index',compact('productsCount','ordersCount','categorieCount','adminCount'));
    }
    public function displayAdmins()
    {
        $all=Admin::all();
        return view('admins.all',compact('all'));
    }
    public function createAdmins()
    {
        return view('admins.create');
    }
    public function storeAdmins(Request $request)
    { 
        $storeAdmins=Admin::create([

            "email"=>$request->email,
            "name"=>$request->name,
            "password"=>Hash::make($request->password)
        ]);
       
        
        if($storeAdmins){
            return redirect('categorie/all')->with(['success' => 'ladmin est ajouter ']);
        }
    }
    public function displayCategorie()
    {
        $all=Category::select()->orderBy('id','desc')->get();
        return view('categories.all',compact('all'));
    }
    public function createCategorie()
    {
        return view('categories.create');
    }
    public function storeCategorie(Request $request)
    { $destinationPath = 'assets/img/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);
        $storeCategorie=Category::create([
            "name"=>$request->name,
            "icon"=>$request->icon,
            "image"=>$myimage,
        ]);
       
        
        if($storeCategorie){
            return redirect('categorie/all')->with(['success' => 'categorie est ajouter ']);
                }
    }
    public function updateCategorie($id)
    {
        $categorie=Category::find($id);
        return view('categories.update',compact('categorie'));
    }
    public function editCategorie($id,Request $request)
    {
        $categorie=Category::find($id);
        $categorie->update(
            $request->all());
        if($categorie){
            return redirect('categorie/all')->with(['success' => 'categorie est modifier ']);
        }
    }
    public function deleteCategorie($id)
    {
        $categorie=Category::find($id);
        $categorie->delete();
        return redirect('categorie/all');
    }
    public function displayProduct()
    {
        $all=Product::all();
        return view('admins.allProduct',compact('all'));
    }
    public function createPoduct()
    {
        $categorie=Category::all();
        return view('admins.createProduct',compact('categorie'));
    }
    public function storePoduct(Request $request)
    {
        $destinationPath = 'assets/img/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);
        $storePoduct=Product::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "category_id"=>$request->category_id,
            "exp_date"=>$request->exp_date,
            "image"=>$myimage,
        ]);
        if($storePoduct){
        return redirect('products/all')->with(['success' => 'categorie est modifier ']);
        }
    }
    public function deleteProduct($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('products/all');
    }
    public function displayOrder()
    {
        $all=Order::select()->orderBy('id','desc')->get();
        return view('orders.all',compact('all'));
    }
    public function updateOrder($id,Request $request)
    {
        $order=Order::find($id);
        $order->update(
            $request->all());
        if($order){
            return redirect('orders/all')->with(['success' => 'order est modifier ']);
        }
    }
    
}
