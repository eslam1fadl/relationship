<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Product;

class tradedProducts extends Controller
{
    //
    public function index() {
        $companies = Company::all();

        return view("tradedProducts.index", compact("companies"));
    }

    public function productDetails($id) {
        $oneProduct = Product::where("id", $id)->get();

        return view("tradedProducts.productDetails", compact("oneProduct"));
    }

    public function createProduct() {
        // homework : route, view, when there is one company at least

        // $companies = Company::all();
        // return view("tradedProducts.createProduct", compact("companies"));
        // view : form (select: company, input: productName)

        // method store product
        // route, request -> validation, save -> product Table
    }
}
