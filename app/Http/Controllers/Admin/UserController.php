<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){
        $data = $request->all();
        //@ => validar
        $pager = @$data['pager']?$data['pager']:3;
        $search = @$data['search']?$data['search']:null;
        $models = User::where('email','like','%'.$search.'%')->paginate($pager);
        //dd($models);
        return view('admin.user.index',
            compact('models','pager','data'));
    }

    public function create(){

    }
    public function store(){

    }
    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
