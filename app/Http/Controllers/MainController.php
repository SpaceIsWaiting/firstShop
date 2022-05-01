<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main.homeContent');
    }
    public function products()
    {
        return view('main.products');
    }
    public function cart()
    {
        return view('main.cart');
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
        return view('main.register');
    }
    public function login()
    {
        return view('main.login');
    }


}
