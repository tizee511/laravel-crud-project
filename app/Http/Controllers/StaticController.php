<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function navpage(){
        return view('/navpage');
    }
    public function users(){
    $userename = 'nashwan';
    $i = 2;
        return view('users', compact('userename','i'));
    }
    public function posts(){
        return view('posts');
    }
    public function about(){
        return "<h1>About Page</h1>";;
    }
    public function portFolio(){
        return "<h1>PortFolio Page</h1>";;
    }
    public function contact(){
        return "<h1>Contact Page</h1>";;
    }
    public function store($categor=null,$itmes=null){
    if(isset($categor))
    {
        if(isset($itmes)){

            return "<h2>$itmes</h2>";
        }

        return "<h1>$categor</h1>";
    }
    return "<h1>STOER</h1>";
    }
    public function contorllPath(){
    $filter = request('style');
    if(isset($filter))
    {
        return 'Laravel Extra Intellisense error <span style="color:red;font-size:20px">'.strip_tags($filter).'</apan>';
    }
    return 'Laravel Extra Intellisense error <span style="color:red;font-size:20px">All Error laravel</apan>';
    }
}
