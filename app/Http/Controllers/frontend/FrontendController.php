<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $trending_products = Product::where('trending','1')->take(15)->get();

        return view('frontend.index', compact('trending_products'));
    }

    public function category()
    {
        $category = Category::where('status','0')->get();
        $trending_categories = Category::where('popular','1')->take(15)->get();
        return view('frontend.category', compact('category','trending_categories'));
    }

    public function viewCategory($slug)
    {
        if (Category::where('slug', $slug)->exists())
        {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('categoryId',$category->id)->where('status','0')->get();
            return view('frontend.products.index', compact('category', 'products'));
        }
        else {
            return redirect('/')->with('status','slug doesnot exists');
        }

    }
}
