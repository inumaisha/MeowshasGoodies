<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PageController extends Controller
{
    public function home(){
        return view('pages.index');
    }
    public function about () {
        return view('pages.about');
    }
    public function services($language) {
        $products = Product::paginate(15);
        return view('pages.services')->with
        (['products' => $products,
        'language' => $language,]);
    }
     public function show($language, $id){
        $product = Product::find($id);
        return view('pages.show')->with
        (['product' => $product,
        'language' => $language,]);
     }
}
