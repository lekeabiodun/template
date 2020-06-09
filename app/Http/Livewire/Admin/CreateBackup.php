<?php

namespace App\Http\Livewire\Admin;

use App\Models\Backup;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateBackup extends Component
{
    public $remote_server;
    public $remote_user;
    public $remote_password;
    public $remote_port;
    public $remote_directory;

    public function render()
    {
        return view('admin.backup.create');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'remote_server'=> ['required', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'],
            'remote_user'=> ['required'],
            'remote_password'=> ['required'],
            'remote_port'=> ['required', 'numeric'],
            'remote_directory'=> ['required'],
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            'remote_server'=> ['required', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'],
            'remote_user'=> ['required'],
            'remote_password'=> ['required'],
            'remote_port'=> ['required', 'numeric'],
            'remote_directory'=> ['required'],
        ]);
        
        $ftp_conn = ftp_connect($this->remote_server, $this->remote_port, 300);
        try {
            ftp_login($ftp_conn, $this->remote_user, $this->remote_password);
        } catch (\Throwable $th) {
            return $this->addError('ftp-connect', 'FTP Connection failed');
        }

        ftp_close($ftp_conn);

        Backup::create([
            'remote_server'=> $this->remote_server,
            'remote_user'=> $this->remote_user,
            'remote_password'=> $this->remote_password,
            'remote_port'=> $this->remote_port,
            'remote_directory'=> $this->remote_directory,
            "slug"=>Str::slug(str_replace('.', '-', $this->remote_server)." ".time())
        ]);
        return redirect("admin/backups");
    }
}
