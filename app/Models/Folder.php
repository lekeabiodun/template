<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $guarded = [];

    public function backup()
    {
        return $this->belongsTo(Backup::class);
    }

    public function parentFolder()
    {
        return $this->belongsTo(Folder::class, 'parent_id');
    }

    public function subFolders()
    {
        return $this->hasMany(Folder::class, 'parent_id');
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

}
