<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function indexCurriculum(){
        return view('website.pages.curriculum');
    }
    public function indexLearningEnvironment(){
        return view('website.pages.learning-environment');
    }
    public function indexPlanning(){
        return view('website.pages.planning');
    }
}
