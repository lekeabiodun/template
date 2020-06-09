<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
    protected $guarded = [];

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function editRoute()
    {
        return url("admin/backups/$this->slug/edit");
    }

    public function showRoute()
    {
        return url("admin/backups/$this->slug");
    }

}
