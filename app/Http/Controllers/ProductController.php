<?php

namespace App\Http\Controllers;

// use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
class ProductController extends Controller
{
    //
    public function index()
    {
        return view('product', [
            'product' => Product::all()
        ]);
    }
    public function show(string $id)
    {
        // $total=DB::table('order')->selectRaw('sum(product_order.price * product_order.quantity) as total')
        // ->join('product_order','order.id','=', 'product_order.id_order')
        // ->join('product', 'product.id','=', 'product_order.id_product')
        // ->where('order.id', $id)
        // ->first();
        $order = Order::where('id', $id)->first();
        return view('order', ['order' => $order]);

    }
}
