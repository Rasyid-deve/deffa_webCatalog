<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public function index(){
        return view('user.pages.category',['item' => Product::item()]);
   }
}
