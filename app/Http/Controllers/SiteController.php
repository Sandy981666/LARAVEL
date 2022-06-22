<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view("site.index");
    }
    public function getAbout(){
        return view("site.about");
    }
    public function getServices(){
        return view("site.services");
    }
    
    
}
