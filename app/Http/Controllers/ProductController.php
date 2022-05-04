<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\PostDec;

class ProductController extends Controller
{
//    public function products() {
//        $products = Product::all();
//
//        return view('products',compact('products'));
////        $products = Product::where('name','качественный')->get();
////        foreach ($products as $product)
////        dump($product->name);
////        $price=DB::table('products')->orderBy('price','desc')->get();
////        dd($price);
//
//    }
//    public function create()
//    {
//        $productsArr = [
//            [
//            'category_id' => '3',
//            'name' => 'KityCat',
//            'description' => 'Food for cats',
//            'image' => '',
//            'price' => '20',
//            ],
//            [
//                'category_id' => '1',
//                'name' => 'KityDog',
//                'description' => 'Food for dogs',
//                'image' => '',
//                'price' => '25',
//            ],
//
//        ];
//        foreach ($productsArr as $product){
//            Product::create($product);
//        }
//
//        dd('its okey,dude(><)');
//    }
//    public function update()
//    {
//        $product = Product::find(5);
//        $product->update(
//            [
//                'category_id' => '4',
//                'name' => 'updated',
//                'description' => 'Food for updated',
//                'image' => '',
//                'price' => '13',
//            ]);
//        dd('updated');
//    }
//    public function delete(){
//        $product = Product::find(2);
//        $product->delete();
//        dd('deleted'); #удаление
//    }
//    public function restore(){
//        $product = Product::withTrashed()->find(2);#восстановление из "мусорки"
//        $product->restore();
//        dd('продукт с id: '.$product->id.' восстановлен');
//    }
//    public function first_or_create(){
//        $product = Product::find(1);      #если такой заголовок уже есть то показать,
//        $product=Product::firstOrCreate(['name' => 'first_or_create'],
//            # иначе создать
//           [ 'category_id' => '4',
//            'name' => 'first_or_create',
//            'description' => 'Food for updated',
//            'image' => '',
//            'price' => '34',
//        ]);
//    }
//    public function update_or_create(){
//        $product=Product::updateOrCreate(['name' => 'first_or_create'],
//            # иначе создать
//            ['category_id' => '4',
//            'name' => 'first_or_create',
//            'description' => 'Food for updated',
//            'image' => '',
//            'price' => '34',
//        ]);
//    }
    public function showProduct($cat,$prod_id){
        $product = Product::where('id',$prod_id)->first();

            return view('main.product',compact('product'));


    }
}
