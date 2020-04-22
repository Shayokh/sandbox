<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('categories.index')->with('categories', $categories);
    }

    public function form ( Category $category = null ) {
        $category = $category ?: new Category;
        return view('categories.form')->with('category', $category);
    }

    public function post (CategoryRequest $request) {

        $category = Category::firstOrNew(['id' => $request->get('id')]);
        $category->name = $request->get('name');
        $category->save();
        
        return redirect()->route('category.index');
    }

    public function delete (Category $category) {
        $category->delete();
        return redirect()->back();
    }
}
