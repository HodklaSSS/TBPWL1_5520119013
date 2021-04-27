<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $user=Auth::user();
        return view('KategoriBarang.category', compact('user','categories'));
    }
    public function tbkategori()
    {
        $user=Auth::user();
        return view('KategoriBarang.tambah', compact('user'));
    }
    public function insertKategori(Request $req)
    {
        $category = new Category();
        $category->name = $req->get('name');
        $category->description = $req->get('description');
        $category->save();

        return redirect()->route('admin.kategori');
    }
    public function hpscategory(Request $req)
    {
        $category = Category::find($req->get('id'));
        $category->delete();

        return redirect()->route('admin.kategori');
    }
}
