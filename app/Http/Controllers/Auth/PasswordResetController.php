<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordResetController extends Controller
{
    public function index()
    {
    	return view('auth.password.reset');
    }
}
