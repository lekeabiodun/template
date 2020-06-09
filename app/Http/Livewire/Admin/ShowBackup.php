<?php

namespace App\Http\Livewire\Admin;

use App\Models\File;
use App\Models\Backup;
use App\Models\Folder;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class ShowBackup extends Component
{
    public $backup;
    public $progress=0;

    public function mount(Backup $backup)
    {
        $this->backup = $backup;
    }

    public function render()
    {
        return view('admin.backup.show');
    }

    public function indexBackup()
    {
        // Config::set('filesystems.disks.'.$this->backup->slug, array(
        //     'driver' => 'ftp',
        //     'host' => $this->backup->remote_server,
        //     'username' => $this->backup->remote_user,
        //     'password' => $this->backup->remote_password,
        //     // Optional FTP Settings...
        //     'port' => $this->backup->remote_port,
        //     // 'root' => '',
        //     // 'passive' => true,
        //     // 'ssl' => true,
        //     // 'timeout' => 30,
        // ));
        // dd(dirname(dirname(storage_path("not-available.png"))));
        // $files = [];
        // dd( file_put_contents($this->backup->slug, Storage::disk($this->backup->slug)->allFiles($this->backup->remote_directory) ));
        // $dir = Storage::disk($this->backup->slug)->allDirectories($this->backup->remote_directory);
        // $files[$this->backup->remote_directory] = Storage::disk($this->backup->slug)->files($this->backup->remote_directory);

        // foreach($dir as $d)
        // {
        //     $files[$d] = Storage::disk($this->backup->slug)->files($d);
        // }
        // dd($files);
        // $full_path_source = Storage::disk($sourceDisk)->getDriver()->getAdapter()->applyPathPrefix($sourceFile);
        // $full_path_dest = Storage::disk($destDisk)->getDriver()->getAdapter()->applyPathPrefix($destFile);
        // $count = 0;
        // $files = Storage::disk($this->backup->slug)->files($this->backup->remote_directory);
        // $files_count = count($files);
        // foreach ($files as $file) {
        //     // $source = Storage::disk($this->backup->slug)->get($file);
        //     // $destination = Storage::getDriver()->getAdapter()->applyPathPrefix($file);
        //     // Storage::put($this->backup->slug."/".$file, $source);
        //     $count++;
        //     $this->updatingProgress( ($count/$files_count) * 100);
        // }

        // $directories = Storage::disk($this->backup->slug)->directories($this->backup->remote_directory);
        // $files = Storage::disk($this->backup->slug)->files($this->backup->remote_directory);

        // foreach ($directories as $dir) {
        //     // $source = Storage::disk($this->backup->slug)->get($dir);
        //     // if(is_dir($source)) {
        //     //     echo "Yes";
        //     // } else {
        //     //     echo "No";
        //     // }
        //     // echo $dir . "<br />";
        // }

        if($this->backup->status == 'indexed' || $this->backup->status == 'indexing')
        {
            return ;
        }

        $this->backup->update(['status'=>'indexing']);

        $this->walkdir($this->backup->remote_directory);
        
        $this->backup->update(['status'=>'indexed']);

        return redirect($this->backup->showRoute());

    }

    public function walkdir($directory, $parentFolder=Null)
    {
        Config::set('filesystems.disks.'.$this->backup->slug, array(
            'driver' => 'ftp',
            'host' => $this->backup->remote_server,
            'username' => $this->backup->remote_user,
            'password' => $this->backup->remote_password,
            'port' => $this->backup->remote_port,
            'timeout' => 300000,
        ));

        $folder = Folder::create([
            'backup_id' => $this->backup->id,
            'folder' => $directory,
            'parent_id' => $parentFolder,
            'slug' => Str::slug(str_replace('/', '-', $directory))
        ]);

        $directories = Storage::disk($this->backup->slug)->directories($directory);
        $files = Storage::disk($this->backup->slug)->files($directory);

        foreach ($files as $file) {
            File::create([
                'file' => $file,
                'backup_id' => $folder->backup_id,
                'folder_id' => $folder->id,
                'slug' => Str::slug(str_replace('/', '-', $file))            
            ]);
        }
        foreach ($directories as $dir) {
            $this->walkdir($dir, $folder->id);
        }
    }

    public function undoBackup()
    {
        $this->backup->folders()->delete();
        $this->backup->files()->delete();
        $this->backup->update(['status'=>'']);
        return redirect($this->backup->showRoute());
    }

    public function getFoldersProperty()
    {
        return $this->backup->folders;
    }

    public function getFilesProperty()
    {
        return $this->backup->files;
    }


}
