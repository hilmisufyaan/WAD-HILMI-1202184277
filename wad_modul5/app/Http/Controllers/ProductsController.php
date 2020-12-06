<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Ini Controller yang mengatur tugas tugas yang berkaitan dengan table product

class ProductsController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
        /* 
            Ini adalah method index pada controller product
        */
    {
        // mengambil semua data pada table product
        $products = \App\Models\Product::all(); 

        // arahkan ke halaman product.blade.php dengan mengirimkan data $product
        return view('product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // arahkan ke halaman product-create.blade.php
        return view('product-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        /*
            method store pada controller product
            untuk mengelola logic dari penyimpanan data baru untuk table product
        */
    {

        // validasi
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // upload file
        $path = $request->file('img_path')->store('public/upload');
        $image_name = explode("/", $path);

        // fungsi eloquent untuk menambah data kedalam table product
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'description' => $request['description'],
            'stock' => $request['stock'],
            'img_path' => 'storage/upload/' . end($image_name)
        ]);

        // arahkan ke method index pada controller product
        // sembari memberi pesan sukses bahwa data berhasil ditambah
        return redirect()->route('product.index')
            ->with('sukses','Product Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product->name);
        return view('product-edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $gambarLama = $product->img_path;
        $gambarLama = explode('/', $gambarLama);
        $image_name = $gambarLama;

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
        ]);

        if( $request->hasFile('img_path') ) {

            $gambarLama = end($gambarLama);

            $request->validate([
                'img_path' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            unlink(storage_path('app/public/upload/' . $gambarLama));

            $path = $request->file('img_path')->store('public/upload');
            $image_name = explode("/", $path);
        }

        Product::where('id', $id)
                ->update([
                    'name' => $request['name'],
                    'price' => $request['price'],
                    'description' => $request['description'],
                    'stock' => $request['stock'],
                    'img_path' => 'storage/upload/' . end($image_name)
                ]);

        return redirect()->route('product.index')
                ->with('sukses','Product Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $gambar = $product->img_path;
        $gambar = explode('/', $gambar);
        $gambar = end($gambar);

        unlink(storage_path('app/public/upload/' . $gambar));
        $product->delete();

        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }
}
