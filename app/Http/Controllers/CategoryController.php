<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
{
    $categories = Category::all();
    return view('dashboard.admin', compact('categories' ));
    
}
public function display()
{
    $categories = Category::all();
    return view('dashboard.organisateur', compact('categories'));
}
public function updateCategory(Request $request) {
    $category = Category::findOrFail($request->id);
    $category->name = $request->name;
    $category->save();

    return redirect()->back()->with('success', 'Category updated successfully');
}
public function deleteCategory(Request $request) {
    $category = Category::findOrFail($request->id);
    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully');
}
public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255|unique:categories',
    ]);

    // Create the category
    $category = new Category();
    $category->name = $request->name;
    $category->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Category created successfully.');
}
}
