<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product as Product;
use Illuminate\Support\Facades\Auth;

class KelolaBarangController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $user = Auth::user();
        return view('KelolaBarang.barang', compact('products','user'));
        print_r($products);
    }

    public function tbbarang()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('KelolaBarang.tambah', compact('brands','categories'));
    }

    public function insertBarang(Request $request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->qty = $request->get('qty');
        $product->price = $request->get('price');
        $product->categories_id = $request->get('category');
        $product->brands_id = $request->get('brand');
        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->extension();
            $filename = 'photo_barang_' . time() . '.' . $extension;
            $request->file('photo')->storeAs('public/photo_barang', $filename);
            $product->photo = $filename;
        }

        $product->save();

        return redirect()->route('admin.barang');
    }
    public function hpsbarang(Request $req)
    {
        $product = Product::find($req->get('id'));
        $product->delete();

        return redirect()->route('admin.barang');
    }
}
