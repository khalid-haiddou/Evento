<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;

class CategoryController extends Controller
{
    public function index()
{
    $categories = Category::all();
    $users = User::all();
    $events = Event::all();
    return view('dashboard.admin', compact('categories','users' ,'events'));
    
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
    $request->validate([
        'name' => 'required|string|max:255|unique:categories',
    ]);

    $category = new Category();
    $category->name = $request->name;
    $category->save();

    return redirect()->back()->with('success', 'Category created successfully.');
}
}
