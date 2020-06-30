<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

class DashboardController 
{

    public function index()
    {
        $users = User::count();
        return view("admin.dashboard", compact('users'));
    }

}