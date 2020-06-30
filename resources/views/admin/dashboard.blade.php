@extends('layouts.app')

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title"> Welcome, {{ user()->name }}</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <!-- First Row -->
                <x-dashboard-card url="admin/users" title="Users" subTitle="Users Accounts" icon="md-account" color="primary" :count="$users" />
                
           </div>
        </div>
    </div>
@endsection

