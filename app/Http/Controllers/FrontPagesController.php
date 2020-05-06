<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function landing() {
        return view('welcome');
    }
    public function index(){
        return view('recipes.index');
    }
    public function show(){
        return view('recipes.show');
    }
}
