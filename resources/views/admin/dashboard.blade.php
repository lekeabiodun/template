@extends('layouts.app')

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title"> Welcome, {{ user()->name }}</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <!-- First Row -->
                <x-dashboard-card url="admin/backups" title="Backups" subTitle="Cloud Server Back-ups" icon="md-cloud-circle" color="primary" :count="$backups" />
                
           </div>
        </div>
    </div>
@endsection

