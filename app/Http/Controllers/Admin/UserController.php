<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){
        $models = User::paginate(5);
        return view('admin.user.index',compact('models'));
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
