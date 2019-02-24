<?php
/**
 * Created by PhpStorm.
 * User: antoinem
 * Date: 21/02/2019
 * Time: 16:25
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function form(){

        return view('login');

    }

    public function processing(){
        request()->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        auth()->attempt([
            'email'=> request('email'),
            'password'=> request('password')
        ]);

        return view('/customer');
    }
}