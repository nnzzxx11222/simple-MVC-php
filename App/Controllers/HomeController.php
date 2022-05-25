<?php 
namespace App\Controllers;

use App\Models\Product;


class HomeController{
    public function index(){
        
        return view('home',Product::all());
    }
    public function login(){
        return view('login');
    }
}