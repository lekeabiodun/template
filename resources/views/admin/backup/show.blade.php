
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Backup</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admin/backups') }}">Backups</a></li>
                <li class="breadcrumb-item active">Backup</li>
            </ol>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary panel-line">
                        <div class="panel-heading"><h3 class="panel-title">Server Information</h3></div>
                        <div class="panel-body">
                            {{-- <div wire:poll.1000ms> Current time: {{ now() }} </div> --}}
                            <p> <strong>Server name: </strong> <a href="{{$backup->showRoute()}}" class="text-decoration-none">{{ $backup->slug }}</a></p>
                            <p> <strong>Server host: </strong> <a href="{{$backup->showRoute()}}" class="text-decoration-none">{{ $backup->remote_server }}</a></p>
                            <p> <strong>Time Added: </strong> {{ $backup->created_at }} </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-bordered">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Server Backup</h3>
                                </div>
                                <div class="panel-body">
                                    {{-- <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-primary" style="width: {{ $progress }}%;" role="progressbar">{{ $progress }}%</div>
                                    </div> --}}
                                    <p> <strong>Folders: </strong> {{ $this->folders->count() }} </p>
                                    <p> <strong>Files: </strong> {{ $this->files->count() }} </p>
                                </div>

                                <div class="panel-footer">
                                    <button class="btn btn-primary" wire:click="indexBackup" {{ $backup->status != ''? 'disabled':''}}>Index Server</button>
                                    <button class="btn btn-warning" wire:click="undoBackup" {{ $backup->status != 'indexed'? 'disabled':''}}>Undo Backup </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

