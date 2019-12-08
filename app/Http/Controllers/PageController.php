<?php
# @Date:   2019-11-04T17:42:55+00:00
# @Last modified time: 2019-11-04T20:53:11+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
      return view('welcome');
    }
    public function about(){
      return view('about');
    }
}
