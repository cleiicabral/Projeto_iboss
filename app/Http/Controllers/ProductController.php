<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    
    public function store(Request $request )
    {

        $product_save = Product::create($request->all());
        if($product_save)
        {
            $product = Product::find($product_save->id);

            if($product)
            {
                
                $id=1;
                $product->categories()->attach($id);

            }else
                {
                return redirect()->back();
                }
        
        }
        
        
        return redirect()->route('product.index');
    }

  
    public function show($id)
    {
       $product = Product::find($id);
       $categories = $product->categories()->get();
       
        if(!$categories){
        return redirect()->route('category.index');
        }
    
        dd($product);
        return view(
        'product.show', 
        compact('categories', 'product')
        );
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
