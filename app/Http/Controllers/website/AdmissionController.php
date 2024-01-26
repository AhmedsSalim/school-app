<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function indexPolicy(){
        return view('website.pages.policy');
    }

    public function indexSchoolFees(){
        return view('website.pages.school-fees');
    }
}
