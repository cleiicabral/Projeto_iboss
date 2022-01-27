<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    //finalizado
    public function index()
    {
        return view('category.index');
    }

    //finalizado
    public function create()
    {
        return view('category.create');
    }

    //finalizado
    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('category.index');
    }

    //finalizado
    public function show()
    {
        $categories = Category::all();
        
        if(!$categories){
            return redirect()->route('category.index');
        }
        
        return view(
        'category.show', 
        compact('categories')
        );
  
    }

    
    public function edit($id)
    {
        $category = Category::find($id);

        if(!$category)
        {
            return redirect()->back();
        }

        return view('category.edit', compact('category'));
    }
   
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if(!$category)
        {
            return redirect()->back();
        }

        $category->update($request->all());

        return redirect()
        ->route('category.show')
        ->with('message', 'Categoria atualizada com sucesso');
    }

    //finalizado
    public function destroy($id)
    {
        $category = Category::find($id);

        if(!$category)
        {
            redirect()->route('category.index');
        }

        $category->delete();
        return redirect()
                ->route('category.show')
                ->with('message','Categoria deletada');
    }
}
