<?php

namespace App\Http\Controllers\Project;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\ProcessHost;

class ProjectController extends Controller
{
    public function new()
    {
    	return view('apps.new');
    }

    public function detail()
    {
    	return view('apps.detail');
    }

    public function store(Request $request)
    {
    	ProcessHost::dispatch();
    }
}
