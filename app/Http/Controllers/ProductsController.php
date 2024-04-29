<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Products() 
    {
        $products = Products::paginate(10);
        return view('product',compact( 'products'));
    }

    public function Show(Products $productdetail)
    {
        // $id = $request->id;
        // $productdetail = Products::findOrFail($id);
        
        return view('Product.ProductDetail',compact( 'productdetail'));
    }

    public function Insert()
    {
        return view('Product.InsertProduct');
    }

    public function Store(Request $request)
    {
       $name = $request -> name ; 
       $price = $request -> price ; 
       $stock = $request -> stock ; 
       $description = $request -> description ; 
       
       //Validation
       $request->validate([
           "name"=>"required|min:3|max:50|unique:App\Models\Products,name",
           "price"=>"required|numeric",
           "stock"=>"required|numeric",
           ],[
           "name.required"=>"Name is required",
           "name.max"=>"Name should be less than 50 characters ",
           "name.unique"=>"This product already exists in the database",
           "name.min"=>"At least 3 characters ",
           "price.required"=>"Price is required",
           "price.numeric"=>"Enter a valid number for Price",
           "stock.required"=>"Stock is required",
           "stock.numeric"=>"Enter a valid number for Stock",
       ]);
       //Insertion
       $inserted = Products::create($request -> post()) ;
        // [
        //    "name"=>$name,
        //    "price"=>$price,
        //    "stock"=>$stock,
        //    "description"=>$description
        // ]
           

       if(!$inserted){
           return back()->withInput();
       }else{
           return redirect('/products')->with("success","The product has been added".' '.$name.'!') ;
       }
    }
}
