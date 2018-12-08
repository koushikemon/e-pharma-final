<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Image;
use File;

class PagesController extends Controller
{
    //
    public function index(){


        $product = product::orderby('id','DESC')->get();
        return view('welcome',compact('product'));

    } 
    

    public function about(){
        
        return view('aboutpage');
    }

    
    public function contact(){
        
        return view('contact_us');
    }
     public function cart(){
        
        return view('cartpage');
    } 


}
