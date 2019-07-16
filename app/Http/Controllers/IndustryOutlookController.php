<?php

namespace App\Http\Controllers;

use App\AppConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

use App\wdt\Division;

class IndustryOutlookController extends Controller
{
    // default function
    public function index()
    {
        // return view with options
        return view('pages.industry-outlook',[
            'divisions' => Division::getDivisions()
        ]);
    }

}
