<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutSchoolController extends Controller
{
    public function indexPrincipalMessage(){
        return view('website.pages.about.principal-message');
    }
}
