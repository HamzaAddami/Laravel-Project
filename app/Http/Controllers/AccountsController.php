<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function  Account() {
        
        $users = User::paginate(10);
        return view('account',compact( 'users'));
    }

    public function Insert() {

        return view('Users.InsertUser');
    }

    public function Store(Request $request)
    {
       $name = $request -> name ; 
       $email = $request -> email ; 
       $password = $request -> password ; 
       $password_confirmation = $request -> password_confirmation ; 
       
       //Validation
       $request->validate([
           "name"=>"required|min:3|max:50",
           "email"=>"required|email|unique:App\Models\User,email",
           "password"=>"required|min:9|max:50|confirmed",
           ],[
           "name.required"=>"Name is required",
           "name.max"=>"Name should be less than 50 characters ",
           "name.min"=>"At least 3 characters ",
           "email.required"=>"Email is required",
           "email.email"=>"Enter a valid email address",
           "email.unique"=>"This email already exists in the database",
           "password.required"=>"Password is required",
           "password.min"=>"At least 9 characters ",
           "password.max"=>"Password should be less than 50 characters ",
           
           
       ]);
       //Insertion
       $inserted = User::create($request -> post()) ;
        // [
        //    "name"=>$name,
        //    "price"=>$price,
        //    "stock"=>$stock,
        //    "description"=>$description
        // ]
           

       if(!$inserted){
           return back()->withInput();
       }else{
           return redirect('/account')->with("success","The User has been added".' '.$name.'!') ;
       }
        
    }
}
