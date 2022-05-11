<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactModel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function main()
    {
        $products = Product::where('in_stock',true)->take(8)->get();
//        $products = Product::find(1);
//        dd($category->products);
        return view('main.homeContent',compact('products'));
    }
    public function showCategory($category)
    {
        $category = Category::where('code',$category)->first();
        return view('main.products',compact('category'));
    }



    public function about()
    {
        return view('main.about');
    }
    public function help()
    {
        return view('main.help');
    }
    public function registration()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }


}
