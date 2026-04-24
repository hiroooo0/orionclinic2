<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login', ['hide_sidebar' => true, 'title' => 'Login - Orion Clinic']);
    }
}
