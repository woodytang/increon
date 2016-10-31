<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       $brands = Brand::all();

        return view('index',compact('brands'));
    }

    public function showBrand($id){
        $brand= Brand::findOrFail($id);
        $locations = $brand->locations;
        return view('brand',compact('brand','locations'));
    }

    public function listBrands(){
        $brands = Brand::all();
        return view('iconBrand',compact('brands'));
    }
}
