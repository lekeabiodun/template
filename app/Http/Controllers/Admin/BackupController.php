<?php

namespace App\Http\Controllers\Admin;

use App\Models\Backup;


class BackupController 
{

    public function index()
    {
        $backups = Backup::cursor();
        return view("admin.backup.index", compact('backups'));
    }

    public function create()
    {
        return view("admin.backup.create");
    }

    public function store()
    {
        dd("hit");
    }
    
    

}