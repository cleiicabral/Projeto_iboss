<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    
    //finalizado
    public function index()
    {
        return view('Product.index');
    }

    //finalizado
    public function create()
    {
        return view('product.create');
    }

    //finalizado
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

    //finalizado
    public function show($id)
    {
       $product = Product::find($id);
       $categories = $product->categories()->get();
       
        if(!$categories){
        return redirect()->route('category.index');
        }
        
        
        return view(
        'product.show', 
        compact('categories', 'product')
        );
       
    }

 
    public function edit($id)
    {
        $product = Product::find($id);

        if(!$product)
        {
            return redirect()->back();
        }

        return view('product.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product)
        {
            return redirect()->back();
        }

        $product->update($request->all());

        return redirect()
        ->route('category.show')
        ->with('message', 'Categoria atualizada com sucesso');
    }

    public function destroy($id)
    {
        //
    }
}
