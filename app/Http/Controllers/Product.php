<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Product extends Controller
{
    public function index()
    {
        $product = DB::table('product')->get();
        return view('product/product', ['product' => $product]);
    }
    public function add()
    {
        return view('product/product_add');
    }
    public function edit()
    {
        return view('product_edit');
    }
    public function store(Request $request)
    {
        $name = $request->tensp;
        $mota = $request->mota;
        $gia = $request->gia;
        $giakm = $request->giakm;
        DB::insert('insert into product (tensp, mota, gia, giakm) values (?, ?, ?, ?)', [$name, $mota, $gia, $giakm]);
        return redirect("product/add")->with('status', 'Bạn đăng ký thành công');
    }
}
