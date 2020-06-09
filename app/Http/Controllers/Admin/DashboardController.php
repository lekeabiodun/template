<?php

namespace App\Http\Controllers\Admin;

use App\Models\Backup;


class DashboardController 
{

    public function index()
    {
        $backups = Backup::count();
        return view("admin.dashboard", compact('backups'));
    }

}