<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Company;

class PageController extends Controller
{
    public function index(){
        $category = Category::all();
        // dd($category);
        return view('index')->with('category', $category);
    }   
}
