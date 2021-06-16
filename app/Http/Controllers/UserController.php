<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use inertia\inertia;
use session;

class UserController extends Controller
{
    public function index(request $request){

        return Inertia::render('profile');
         


    }
    
}
