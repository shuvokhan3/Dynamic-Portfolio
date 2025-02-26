<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller{
    //this method manage page route ,seo property
    public function page(Request $request){
        return view('pages.resume');
    }

    //get resumes data from database
    public function resumeData(Request $request){
        return DB::table('resumes')->get();
    }

    //get experiences data from the database
    public function experienceData(Request $request){
        return DB::table('experiences')->get();
    }

    //get education data from the database
    public function educationData(Request $request){
        return DB::table('educations')->get();
    }


}
