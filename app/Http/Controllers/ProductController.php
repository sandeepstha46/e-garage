<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ViewProduct(Request $request)
    {
        $data = Products::orderBy('id', 'asc')->get();
        return view('product.view-product', compact('data'));
    }

    public function AddProduct()
    {
        return view('product.add-product');
    }

    public function AddNewProduct(Request $request)
    {
        $product = new Products;
        $product->p_id = $request->p_id;
        $product->name = $request->name;
        $product->p_number = $request->p_number;
        $product->car_model = $request->car_model;
        $product->car_year = $request->car_year;
        $product->req_part = $request->req_part;
        $product->textarea = $request->textarea;

        if ($product->save()) {
            return redirect('product/view')->with('success', 'New Booking Added Successfully');
        } else {
            return redirect('product/view')->with('errors', ' Sorry Some Error Occured');
        }
    }
}
