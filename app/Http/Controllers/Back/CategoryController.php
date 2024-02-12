<?php

namespace App\Http\Controllers\Back;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        return view('back.category.index',[
            'categories' => Category::latest()-> get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request ->validate([
            'name' => 'required|min:3'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);

        return back()->with('success','Categories has been created successfully');
    }

    public function update(Request $request, string $id)
    {
        $data = $request ->validate([
            'name' => 'required|min:3'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::find($id)->update($data);

        return back()->with('success','Categories has been updated successfully');
    }

    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return back()->with('success','Categories has been deleted successfully');

    }
}
