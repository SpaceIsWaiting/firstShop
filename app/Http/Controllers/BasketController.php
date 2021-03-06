<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket() {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            return view('empty');
        }
        else{
            $order = Order::findOrFail($orderId);
            return view('main.basket', compact('order'));
        }
    }

    public function basketPlace()
    {
        return view('main.order');
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        }else{
            $order = Order::find($orderId);
        }
        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id',$productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();

        }else{
            $order->products()->attach($productId);
        }

        return redirect()->route('basket');

    }
    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        return redirect()->route('basket');
    }
}
