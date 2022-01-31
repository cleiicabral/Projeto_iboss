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
    public function store(Request $request)
    {

        $product_save = Product::create($request->all());
        if ($product_save) {
            $product = Product::find($product_save->id);

            if ($product) {
                $categoriesSelect = [$request->checkbox];
                foreach ($categoriesSelect as $categoriesSelected) {

                    $product->categories()->attach($categoriesSelected);
                }
            } else {
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

        if (!$categories) {
            return redirect()->route('category.index');
        }


        return view(
            'product.show',
            compact('categories', 'product')
        );
    }

    public function listProductAll()
    {
        $getProducts =  Product::all();
        foreach ($getProducts as $product) {
            $getCategories = $product->categories()->get();
        };


        return view(
            'listProducts',
            compact('getProducts')
        );
    }


    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back();
        }

        return view('product.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
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

    public function createProduct()
    {

        $categoriesAll = CategoryController::returnCategoriesAll();


        return view('cadastroProduto', compact('categoriesAll'));
    }
}
