<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('profile.index');
            } else if ($usertype == 'admin') {
                return view('admin.index');  // Ini akan mengarah ke resources/views/admin/index.blade.php
            } else {
                return redirect()->back();
            }
        }

        return view('admin.index');
    }
}