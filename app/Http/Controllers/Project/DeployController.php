<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeployController extends Controller
{
    public function index()
    {
    	return view('apps.deploy.index');
    }

    public function generate()
    {
    	return view('apps.deploy.generate');
    }

    public function view()
    {
    	return view('apps.deploy.view');
    }
}
