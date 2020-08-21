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
        $localcomp = Company::where('companytype', 'local')->with('category')->orderBy("id", "desc")->take(8)->get();
        $foreigncomp = Company::where("companytype", "foreign")->with('category')->orderBy("id", "desc")->take(8)->get();
        $companies = Company::all();
        $products = Product::all();
        // dd($localcomp);
        // dd($category);
        return view('index')->with(compact('category', 'localcomp', 'foreigncomp', 'companies', 'products'));
    } 
    
    public function localcomp(){
        $localcomp = Company::where('companytype', 'local')->with('category')->paginate(20);
        return view('companies.local-comp')->with('localcomp', $localcomp);
    }

    public function foreigncomp(){
        $foreigncomp = Company::where('companytype', 'foreign')->with('category')->paginate(20);
        return view('companies.foreign-comp')->with('foreigncomp', $foreigncomp);
    }

    public function companyshow($language, $id){
        $company = Company::with('category')->find($id);
        $products= Product::with('company')->where('company_id', $id)->paginate(5);

        return view('companies.comp-show')->with(compact('company', 'products'));
    }

    public function productshow($language, $id, $pid){
        $company = Company::with('category')->find($id);
        $category= $company->category->id;
        // dd($category);
        $single = Product::with('company')->find($pid);
        $products= Product::with('category')->where('category_id', $category)->paginate(5);

        return view('companies.product-show')->with(compact('company', 'products', 'single'));
    }
}
