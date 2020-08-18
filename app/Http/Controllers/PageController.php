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
        $localcomp = Company::where('companytype', 'local')->with('category')->get();
        $foreigncomp = Company::where("companytype", "foreign")->get();
        dd($localcomp);
        // dd($category);
        return view('index')->with(compact('category', 'localcomp', 'foreigncomp'));
    }   
}
