<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Company;
use App\Models\Product;

class PageController extends Controller
{
    public function index(){
        $category = Category::all();
        $localcomp = Company::where('companytype', 'local')->with('category')->get();
        $foreigncomp = Company::where("companytype", "foreign")->with('category')->get();
        $companies = Company::all();
        $products = Product::all();
        // dd($localcomp);
        // dd($category);
        return view('index')->with(compact('category', 'localcomp', 'foreigncomp', 'companies', 'products'));
    }   
}
