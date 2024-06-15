<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class HomeController extends Controller
{
    public function index()
    {
        $forms = Form::with('user')->latest()->get();
        return view('home', ['forms' => $forms]);
    }
}
