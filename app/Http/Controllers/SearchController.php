<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class SearchController extends Controller
{
    public function search(Request $request){

    	$search = $request->search;

    	$info = product::orWhere('medicinename','like','%'.$search.'%')->orWhere('medicinecompany','like','%'.$search.'%')->orderby('id','DESC')->get();
    	return view('search',compact('info'));
    }
}
