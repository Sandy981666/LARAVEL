<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function getManageProduct(){
        $data=[
            'products'=>Product::all()
        ];
        return view("product.manage",$data);
    }
    public function postAddProduct(Request $request){
            $name = $request->input('name');
            $detail = $request->input('details');
            $cost = $request->input('cost');
            $expiry = $request->input('expirydate');

            $product = New Product;
            $product->name = $name;
            $product->detail = $detail;
            $product->cost = $cost;
            $product->expirydate = $expiry;
            $product->save();
            return redirect()->back();


    }

    public function getManageNews(){
        $data=[
            'news'=>News::all()
        ];
        return view("product.managenews",$data);
    }
    public function postAddNews(Request $request){
            $title = $request->input('title');
            $detail = $request->input('details');
            $createdat = $request->input('createdat');

            $news = New News;
            $news->title = $title;
            $news->detail = $detail;
            $news->createdat = $createdat;
            $news->save();
            return redirect()->back();


    }
    

    
}

