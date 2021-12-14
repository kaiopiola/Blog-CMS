<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Categories::where('parent', 0)->get();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function showIndex($id)
    {
        $categories = Categories::where('parent', $id)->get();
        return view('admin.category.index', ['categories' => $categories]);
    }
}
