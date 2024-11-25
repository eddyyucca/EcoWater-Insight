<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
         return view('dashboard/dashboard');
    }
    public function about(): string
    {
         return view('dashboard/about');
    }
}
