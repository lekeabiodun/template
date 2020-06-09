@extends('layouts.app')

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Backup</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Backup</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-md btn-success btn-round waves-effect waves-classic" href="{{ url('admin/backups/create') }}">
                    <i class="icon md-plus-circle" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Add</span>
                </a>
            </div>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-striped table-hover toggle-circle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Backup</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $backups as $backup )
                            <tr>
                                <td>#</td>
                                <td><a href="{{$backup->showRoute()}}" class="text-decoration-none">{{ $backup->slug }}</a></td>
                                <td> {{ $backup->created_at->format('d-M-Y') }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


