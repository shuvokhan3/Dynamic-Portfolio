<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    //this method manage route and load the property of seo in home page
    public function page(Request $request){
        $seo = DB::table('seoproperties')->where('pageName','=','home')->first();
        return view('pages.home',['seo'=>$seo]);
    }

    //this method get the hero section data from the database
    public function heroData(Request $request){

        return DB::table('heroproperties')->get();
    }


    //this method get projects data into the database
    public function projectData(Request $request){
        return DB::table('projects')->get();
    }

    //this method get the about section data from the database
    public function aboutData(Request $request){
        return DB::table('abouts')->get();
    }
    //this method get the socalLink form the database
    public function socialLinksData(Request $request){
        return DB::table('socials')->get();
    }

}
