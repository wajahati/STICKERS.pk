<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }



    function add()
    {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }


    function insert(Request $request)
    {
        $product = new Product();
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/uploads/products/',$filename);
            $product->image = $filename;
        }
        $product->categoryId = $request->input('categoryId');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_discription = $request->input('small_discription');
        $product->discription = $request->input('discription');
        $product->orignal_price = $request->input('orignal_price');
        $product->selling_price = $request->input('selling_price');
        $product->quantity = $request->input('quantity');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE?'1':'0';
        $product->trending = $request->input('trending') == TRUE?'1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_discription = $request->input('meta_discription');
        $product->save();

        return redirect('/products')->with('status', "Product Added Successfully");
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('image')){
            $path = 'assets/uploads/products/'.$product->image;
            if (File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/uploads/products/',$filename);
            $product->image = $filename;
        }
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_discription = $request->input('small_discription');
        $product->discription = $request->input('discription');
        $product->orignal_price = $request->input('orignal_price');
        $product->selling_price = $request->input('selling_price');
        $product->quantity = $request->input('quantity');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE?'1':'0';
        $product->trending = $request->input('trending') == TRUE?'1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_discription = $request->input('meta_discription');
        $product->update();

        return redirect('/products')->with('status', "Product Updated Successfully");
    }
    public function delete($id)
    {
        $product = Product::find($id);
        if ($product->image){
            $path = 'assets/uploads/products/'.$product->image;
            if (File::exists($path)){
                File::delete($path);
            }

            $product->delete();
            return redirect('products')->with('status', "Product deleted Successfully");
        }
    }
}
