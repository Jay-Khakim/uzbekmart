<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Company;
use App\Models\Product;
use App\Models\Service;
use App\Models\Investment;
use App\Models\Buyrequest;
use App\Models\Blog;

class PageController extends Controller
{
    public function index(){
        $category = Category::all();
        $subcategories= Subcategory::all();
        $localcomp = Company::where('companytype', 'local')->with('category')->orderBy("id", "desc")->take(8)->get();
        $foreigncomp = Company::where("companytype", "foreign")->with('category')->orderBy("id", "desc")->take(8)->get();
        $companies = Company::all();
        $products = Product::all();
        // dd($localcomp);
        // dd($category);
        return view('index')->with(compact('category', 'subcategories', 'localcomp', 'foreigncomp', 'companies', 'products'));
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

    public function categoryshow($language, $id){
        $categories = Category::all();
        $cat_id = $id;
        $one_categories = Company::where('category_id', $id)->with('category')->paginate(20);
        return view('companies.categ-show')->with(compact('one_categories', 'categories', 'cat_id'));
    }

    public function subcategoryshow($language, $cid, $sid){   //$cid  = category id, $sid=subcategory id
        $category= Category::find($cid);
        $subcategory = Subcategory::find($sid);
        // $subcategory = Category::where('category_id', $id);
        $cat_id = $cid;
        $subcat_id = $sid;
        $one_subcategories = Company::where('subcategory_id', $sid)->with('category')->with('subcategory')->paginate(20);
        return view('companies.subcat-show')->with(compact('one_subcategories', 'category', 'subcategory', 'cat_id', 'subcat_id'));
    }

    public function forinvestors(){
        return view('services.for-investors');
    }

    public function checkcompany(){
        return view('services.check-company');
    }

    public function services()
    {   
        $services = Service::all();
        return view('services.services')->with('services', $services);
    }

    public function serviceshow($language, $id){
        // $company = Company::with('category')->find($id);
        $service_id = $id;
        $service= Service::find($id);

        return view('services.service-show')->with(compact('service', 'service_id'));
    }

    public function investments(){
        $categories = Category::all();
        $investments = Investment::with('category')->paginate(20);
        return view('investments.investments')->with(compact('categories', 'investments'));
    }

    public function buyrequest(){
        $categories = Category::all();
        $buyrequests = Buyrequest::with('category')->paginate(20);
        return view('buy-request.buy-request')->with(compact('categories', 'buyrequests'));
    }

    public function singlerequest($language, $id){
        $buyrequest = Buyrequest::with('category')->find($id);

        return view('buy-request.single-request')->with('buyrequest', $buyrequest);
    }

    public function contacts(){
        return view('contacts');
    }

    public function blogs(){
        $blogs = Blog::all();
        return view('blog.blogs')->with('blogs', $blogs);
    }

    public function blog($language, $id){
        $blog = Blog::find($id);
        return view('blog.blog')->with('blog', $blog);
    }

    public function faq(){
        return view('faq');
    }

    public function advertise(){
        return view('advertise');
    }
}
