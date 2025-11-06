<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeApiController extends Controller
{
    public function index(){
        return Recipe::all();
    }
}
