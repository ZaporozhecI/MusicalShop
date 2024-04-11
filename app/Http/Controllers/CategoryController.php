<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'category_product' => Category::all()
        ]);
    }

    // public function show(string $id)
    // {       
    //         return view( 'category', [
    //         'category' => Category::all()->where( 'id', $id)->first()
    //         ]);
    // }

    public function show(string $id)
    {
            return view( 'category', [
            'category' => Category::all()->where( 'id', $id)->first()->Product()->get()
            ]);

    }
}
