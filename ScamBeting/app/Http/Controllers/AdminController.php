<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User};

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.admin');
    }

    public function user()
    {
        $users = User::all();
        return view('admin.admin', compact('users'));
    }

    public function edit()
    {
    }
    public function update()
    {
    }
    public function store()
    {
    }
    public function show()
    {
    }
}
