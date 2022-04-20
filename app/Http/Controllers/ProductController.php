<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            return redirect('product/view')->with('success', 'New Product Added Successfully');
        } else {
            return redirect('product/view')->with('errors', ' Sorry Some Error Occured');
        }
    }

    public function EditProduct($id)
    {
        $product = Products::where('id', $id)->first();
        return view('product.edit-product', compact('product'));
    }

    public function UpdateProduct(Request $request, $id)
    {
        $product = Products::findOrfail($id);
        $product->p_id = $request->p_id;
        $product->name = $request->name;
        $product->p_number = $request->p_number;
        $product->car_model = $request->car_model;
        $product->car_year = $request->car_year;
        $product->req_part = $request->req_part;
        $product->textarea = $request->textarea;
        if ($product->save()) {
            return redirect('product/view')->with('success', 'Product Updated Successfully');
        } else {
            return redirect('product/edit-product')->with('errors', ' Sorry Some Error Occured');
        }
    }

    public function DeleteProduct($id)
    {
        $product = Products::findOrfail($id)->get();
        $result = $product->save();

        if ($result) {
            return view('product/view', compact('data'))->with('success', 'BProduct Deleted Successfully');
        } else {
            return redirect('product/edit-product')->with('errors', ' Sorry Some Error Occured');
        }
    }
}
