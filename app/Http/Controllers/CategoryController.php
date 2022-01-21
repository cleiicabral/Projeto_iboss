<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   
    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('category.index');
    }

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
        
    }

   
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
        $categories = Category::find($id);

        if(!$categories)
        {
            redirect()->route('category.index');
        }

        $categories->delete();
        return redirect()
                ->route('category.index')
                ->with('message','Categoria deletada');
    }
}
