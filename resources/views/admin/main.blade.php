@extends('layouts.admin_app')

@section('content')



    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            Select menu
        </div>
    </div>

@endsection
