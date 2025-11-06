<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('Admin_Dashboard.all_recipes', compact('recipes'));
    }


    public function create()
    {
        return view('Admin_Dashboard.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'description' => 'required|max:255',

        ]);

        Recipe::create($validated);
        // Recipe::create([
        //     'name' => $request->name,
        //     'description' => $request->description
        // ]);
        return redirect()->route('Admin_Dashboard.index');
    }


    // public function show(string $id)
    // {
    //     $instructor = Instructor::find($id);
    //     return view('instructor_form.show', compact('instructor'));
    // }

    public function edit(string $id)
    {
        $recipe = Recipe::find($id);
        return view('Admin_Dashboard.edit', compact('recipe'));
    }

    public function update(Request $request, string $id)
    {
        $recipe = Recipe::find($id);
        $recipe->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect()->route('Admin_Dashboard.index');
    }


    public function destroy(string $id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect()->route('Admin_Dashboard.index');
    }
}
