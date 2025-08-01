<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index()
    {
        $jobs = Jop::all();
        return view('jobs.index', ['jobs' => $jobs]);
        
    }
}
