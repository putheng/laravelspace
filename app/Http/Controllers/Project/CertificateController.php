<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function index()
    {
    	return view('apps.ssl.index');
    }

    public function create()
    {
    	return view('apps.ssl.create');
    }
}
