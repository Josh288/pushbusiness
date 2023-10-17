<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product/index', compact ('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('product/create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Product::$rules);

        if($request->hasFile('imgProduct') )
        {
            $file = $request->file('imgProduct');

            $destinationPath= 'images/imgProduct/';
            $filename= time() . '-' . $file->getClientOriginalName();
            $uploadsuccess = $request->file('imgProduct')->move($destinationPath, $filename);
            //$newPost->imgProduct= $destinationPath . $filename;

        }

        $product = Product::create($request->all());





        return redirect()->route('product.index')
            ->with('Éxito', 'Producto agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {

        request()->validate(Product::$rules);
        $test = request()->except('_token','_method');

        Product::where('id',$product)->update($test);



        return redirect()->route('product.index')
            ->with('Éxito', 'Información actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('product.index')
            ->with('success', 'Producto eliminado');
    }
}