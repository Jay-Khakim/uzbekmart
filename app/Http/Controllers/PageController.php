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


        // if(isset($request->orderBy)){
        //     if($request->orderBy == 'name-a-z'){
        //         $localcomp = Company::where('companytype', 'local')->orderBy('name_en')->get();
        //     }
        //     if($request->orderBy == 'price-high-low'){
        //         $localcomp = Product::where('companytype', 'local')->orderBy('name_en','desc')->get();
        //     }
        // }

        return view('companies.local-comp')->with('localcomp', $localcomp);
    }

    public function foreigncomp(){
        $foreigncomp = Company::where('companytype', 'foreign')->with('category')->paginate(20);
        return view('companies.foreign-comp')->with('foreigncomp', $foreigncomp);
    }

    public function companyshow($language, $id){
        $company = Company::with('category')->find($id);
        $products= Product::with('company')->where('company_id', $id)->get();

        return view('companies.comp-show')->with(compact('company', 'products'));
    }

    public function productshow($language, $id, $pid){
        $company = Company::with('category')->find($id);
        $category= $company->category->id;
        // dd($category);
        $single = Product::with('company')->find($pid);
        $products= Product::with('category')->where('category_id', $category)->paginate(10);

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

    public function investments(Request $request){
        
        // echo $region = $request->region;
        $categories = Category::all();
        $investments = Investment::with('category')->paginate(20);

        // if(($request->cat !== "selected") && ($request->region !== "selected")){
        //     // $cat_id = Category::where('name_en', 'cat');
        //     $investments = Investment::with('category')
        //     ->where('address_en', $request->region)
        //     ->where('category_id', $request->cat)
        //     ->paginate(20);
        // }
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

    public function aboutus(){
        $companies = Company::all();
        $products = Product::all();
        return view('about')->with(compact('companies', 'products'));
    }

    public function search(){
        $stat_companies = Company::all();
        $stat_products = Product::all();
        $stat_blogs = Blog::all();
        $stat_services = Service::all();
        $stat_buyrequests = Buyrequest::all();
        $search_text = $_GET['query'];
        $companies = Company::where('name_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('name_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('name_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('companytype', 'LIKE', '%'.$search_text.'%')
        ->orWhere('email', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('web', 'LIKE', '%'.$search_text.'%')
        ->orWhere('phone', 'LIKE', '%'.$search_text.'%')
        ->orWhere('email', 'LIKE', '%'.$search_text.'%')
        ->with('category')->get();

        $products = Product::where('name_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('name_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('name_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_ru', 'LIKE', '%'.$search_text.'%')
        ->with('company')->get();

        $blogs = Blog::where('title_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('title_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('title_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('body_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('body_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('body_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('created_at', 'LIKE', '%'.$search_text.'%')->get();

        $buyrequests = Buyrequest::where('name_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('name_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('name_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('amount_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('amount_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('amount_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('phone', 'LIKE', '%'.$search_text.'%')
        ->orWhere('created_at', 'LIKE', '%'.$search_text.'%')->get();

        $investments = Investment::where('title_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('title_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('title_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('avaragepower_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('avaragepower_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('avaragepower_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('amount', 'LIKE', '%'.$search_text.'%')
        ->orWhere('iir', 'LIKE', '%'.$search_text.'%')
        ->orWhere('npv', 'LIKE', '%'.$search_text.'%')
        ->orWhere('payback', 'LIKE', '%'.$search_text.'%')
        ->orWhere('workplaces', 'LIKE', '%'.$search_text.'%')
        ->orWhere('created_at', 'LIKE', '%'.$search_text.'%')->get();

        $services = Service::where('service_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('service_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('service_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('desc_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_en', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_uz', 'LIKE', '%'.$search_text.'%')
        ->orWhere('address_ru', 'LIKE', '%'.$search_text.'%')
        ->orWhere('phone', 'LIKE', '%'.$search_text.'%')
        ->orWhere('created_at', 'LIKE', '%'.$search_text.'%')->get();


        return view('search')->with(compact(
            'companies',
            'products',
            "blogs",
            'buyrequests',
            'investments',
            'services',
            'stat_companies',
            'stat_products',
            'stat_blogs',
            'stat_services',
            'stat_buyrequests'
        ));
    }
}
