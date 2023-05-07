<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;


class MainController extends Controller
{
    public function home()
    {

        $categories = Category::all();
        return view('pages.home', compact('categories',));
    }

    public function productCreate()
    {

        $categories = Category::all();
        return view('pages.productCreate', compact('categories',));
    }

    public function productStore(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required',

        ]);



        $product = new Product();

        $product->name = $data['name'];
        $product->category_id = $data['category'];


        $product->save();

        return redirect()->route('home');
    }

    public function categoryCreate()
    {
        return view('pages.categoryCreate');
    }

    public function categoryStore(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);



        $category = new Category();

        $category->name = $data['name'];



        $category->save();

        return redirect()->route('home');
    }
}
