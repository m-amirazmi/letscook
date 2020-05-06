<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class FrontPagesController extends Controller
{
    public function landing() {
        return view('welcome');
    }
    public function index(){
        $recipes = Recipe::all();
        return view('recipes.index')->with('recipes', $recipes);
    }
    public function show($id){
        $recipe = Recipe::find($id);
        return view('recipes.show')->with('recipe', $recipe);
    }
}
