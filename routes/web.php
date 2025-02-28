<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectListController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;



//Page view
Route::get('/',[HomeController::class,'page']);
Route::get('/resume',[ResumeController::class,'page']);
Route::get('/contact',[ContactController::class,'page']);
Route::get('/project',[ProjectListController::class,'page']);

//Ajax call route
Route::get('heroData',[HomeController::class,'heroData']);
Route::get('projectData',[HomeController::class,'projectData']);
Route::get('skillData',[ResumeController::class,'skillData']);
Route::get('languageData',[ResumeController::class,'languageData']);
Route::get('aboutData',[HomeController::class,'aboutData']);
Route::get('socialLinksData',[HomeController::class,'socialLinksData']);
Route::post('contactRequest',[ContactController::class,'contactRequest']);
Route::get('ProjectListData',[ProjectListController::class,'ProjectListData']);
Route::get('resumeData',[ResumeController::class,'resumeData']);
Route::get('experienceData',[ResumeController::class,'experienceData']);
Route::get('educationData',[ResumeController::class,'educationData']);

