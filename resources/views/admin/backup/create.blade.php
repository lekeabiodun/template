
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Backups</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admin/backups') }}">Backups</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="panel-body">
                    @error('ftp-connect') 
                        <div class="mx-auto text-center">
                            <div class="alert alert-danger dark"> {{ $message }} </div>
                        </div>
                    @enderror

                    <form wire:submit.prevent="store">
                        <div class="panel-body">
                            <div class="form-group row">
                            <label  class="col-md-2 control-label">Remote Server </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" wire:model.lazy="remote_server">
                                    @error('remote_server') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-md-2 control-label">Remote User</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" wire:model.lazy="remote_user">
                                    @error('remote_user') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-md-2 control-label">Remote Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control form-control-lg" wire:model.lazy="remote_password">
                                    @error('remote_password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-md-2 control-label">Remote Port</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" wire:model.lazy="remote_port">
                                    @error('remote_port') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-md-2 control-label">Remote Directory</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" wire:model.lazy="remote_directory">
                                    @error('remote_directory') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-2">
                                    <a href="{{ url('admin/backups') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


