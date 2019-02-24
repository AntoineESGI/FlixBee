<?php

namespace App\Http\Controllers;

use App\Customer;

class RegisterController extends Controller
{
    public function form(){
        return view('register');
    }

    public function processing(){

        request()->validate([
            'name'=>['required','string','min:2','max:24'],
            'firstname'=>['required','string','min:2','max:24'],
            'address'=>['required','min: 5'],
            'email'=>['required','email'],
            'phone'=>['required','min:10'], //,'regex:[+][0-9]{8,16}$'
            'password'=>['required','confirmed','min:8'],
            'password_confirmation'=>['required'],
            'country'=>['required']
        ],[
            // Change alert
            'phone.min'=>'Votre numéro doit faire au minimum 10 chiffres'

        ]);

        $customer= Customer::create([
            'name'=> request('name'),
            'firstname'=> request('firstname'),
            'address'=> request('address'),
            'country'=> request('country'),
            'email'=> request('email'),
            'phoneNumber'=> request('phone'),
            'password'=> bcrypt(request('password')),
            'company_companyCode'=> request('companyCode')
        ]);

        return view('login');
    }
}
