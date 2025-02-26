<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller{

    //this method manage route and load the property of seo
    public function page(Request $request){
        return view('pages.contact');
    }

    //this method store form data in database
    public function contactRequest(Request $request){
        return DB::table('contacts')->insert($request->all());
    }
}

