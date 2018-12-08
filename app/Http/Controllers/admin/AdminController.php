<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\contact;
use App\product;
use Image;
Use File;

class AdminController extends Controller
{
    public function admincontact()
    {
    	$data = contact::orderby('id','DESC')->get();
        return view('admin.contact',compact('data'));
    }

    public function adminproduct()
    {
        return view('admin.productinfo');
    }


    public function productstore(Request $request)
	  {
	    $this->validate($request, [
	      'medicinename'  => 'required',
	      'medicinecompany'  => 'required',
	      'medicineprice'  => 'required',
	    ],
	    [
	      'medicinename.required'  => 'Please provide Medicine Name',
	      'medicinecompany.required'  => 'Please provide Company Name',
	      'medicineprice.required'  => 'Please provide Medicine Price',
	    ]);

	    $medicine = new product();
	    $medicine->medicinename = $request->medicinename;
	    $medicine->medicinecompany = $request->medicinecompany;
	    $medicine->medicineprice = $request->medicineprice;

	    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('image/product/' .$img);
        Image::make($image)->save($location);
        $medicine->image = $img;
    }
	    $medicine->save();

	    echo "Product Are Added";
	    return redirect()->route('product');

	  }
}
