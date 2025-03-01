<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectListController extends Controller{

    //this method manage the route and seo property of ProjectList page
    public function page(Request $request){
        $seo = DB::table('seoproperties')->where('pageName','=','Project')->first();
        return view('pages.project',['seo'=>$seo]);
    }

    //this method get the ProjectList data from database
    public function ProjectListData(Request $request){
        return DB::table('projects')->get();
    }

}
