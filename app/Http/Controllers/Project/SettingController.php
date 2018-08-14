<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
    	return view('apps.setting');
    }

    public function upgrade()
    {
    	return view('apps.upgrade');
    }
}
