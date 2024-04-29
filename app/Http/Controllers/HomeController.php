<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        $users =[
            ['id'=> '1','name'=>'Hamza','age' => '21','job'=>'Developer'],
            ['id'=> '2','name'=>'Messi','age' => '22','job'=>'Witcher'],
            ['id'=> '3','name'=>'Iniesta','age' => '23','job'=>'Painter']
        ];
        return view('home',compact('users'));
    }
    public function Login(Request $request) {
        $name = $request -> name;
        $firstname = $request-> firstname;
        $fruito = $request->input('fruito');
        $fruits = ['Apple','Orange','Banana','Grape','Blueberry'];
         return view('test',compact('fruits','name','firstname','fruito')); 
    }
}
