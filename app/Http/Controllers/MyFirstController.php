<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MyFirstController extends Controller
{

    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function signIn()
    {
        return view('sign-in');
    }

    public function review()
    {
        $reviews = new ContactModel();
        return view('review',['reviews'=>$reviews->all()]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' =>'required|min:4|max:100',
            'username' =>'required|min:4|max:100',
            'review' =>'required|min:20|max:500'
        ]);

        $review = new ContactModel();
        $review->username = $request->input('username');
        $review->email = $request->input('email');
        $review->review = $request->input('review');
        $review->save();
        return redirect('review');
    }

}
