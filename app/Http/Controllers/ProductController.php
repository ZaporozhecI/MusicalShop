<?php

namespace App\Http\Controllers;

// use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    { $perpage = $request->perpage ?? 2;
        return view('product', [
            'product' => Product::paginate($perpage)->withQueryString()
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
    public function create()
    {
   
        return view('product_create', [
            'categories' => Category::all()
        ]);
    }
    public function store(Request $request)
    {
                $validated = $request->validate([
                'name' => 'required|unique:product|max:255',
                'price'=> 'required|integer',
                'id_category' =>'integer'
            ]);
            $product=new Product($validated);
            $product->save();
            return redirect('/product');
      
    }
    public function edit($id)
    {
        return view('product_edit', [
            'product' => Product::find($id),
            'categories' => Category::all()
        ]);
    }
    public function update(Request $request, $id)
    {
            $validated = $request->validate([
            'name'=>'required|max:255',
            'price'=>'required|integer',
            'id_category'=>'integer'
        ]);
        $product=Product::all()->where('id',$id)->first();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->id_category = $validated['id_category'];
        $product->save();
        return redirect('/product');
  
    }
    public function destroy($id)
    {
    
        if (!Gate::allows('destroy-product', Product::find($id))) {
            return redirect('/error')->with(['message'=> 'У вас нет разрешения удалять товары',]);
        }
    
        Product::destroy($id);
    
        return redirect('/product');
    
    }
}
