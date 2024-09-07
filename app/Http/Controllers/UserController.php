<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_name($name, $id) {
        return view('user.user')
        ->with('username',$name)
        ->with('id',$id);
    }
}
