<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegulatoryEnvironmentController extends Controller
{
    // default function
    public function index()
    {
        // return view with options
        return view('pages.regulatory-environment');
    }
}
