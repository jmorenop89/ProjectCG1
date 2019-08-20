<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request){
        $data = $request->all();
        //@ => validar
        $pager = @$data['pager']?$data['pager']:3;
        $search = @$data['search']?$data['search']:null;
        $models = Product::where('name','like','%'.$search.'%')->paginate($pager);
        //dd($models);
        return view('admin.product.index',
            compact('models','pager','data'));
    }
}
