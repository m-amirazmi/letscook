<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{
    public function index()
    {   
        $recipes = Recipe::orderBy('category', 'asc')->paginate(10);
        return view('admin.recipes.index')->with('recipes', $recipes);
    }

    public function create()
    {
        return view('admin.recipes.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required',
            'image' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);
        $recipe = new Recipe();
        $recipe->category = $request->input('category');
        $recipe->name = $request->input('name');
        $recipe->image = $request->input('image');
        $recipe->ingredients = $request->input('ingredients');
        $recipe->instructions = $request->input('instructions');
        $recipe->save();
        return redirect('/admin/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('admin.recipes.show')->with('recipe', $recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        return view('admin.recipes.edit')->with('recipe', $recipe);
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
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required',
            'image' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);
        $recipe = Recipe::find($id);
        $recipe->category = $request->input('category');
        $recipe->name = $request->input('name');
        $recipe->image = $request->input('image');
        $recipe->ingredients = $request->input('ingredients');
        $recipe->instructions = $request->input('instructions');
        $recipe->save();
        return redirect('/admin/recipes/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect('/admin/recipes');
    }
}
