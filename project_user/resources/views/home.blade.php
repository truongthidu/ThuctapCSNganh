@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br>
                    <a href="{{ url("/") }}" class="btn btn-primary" style="float: right">Đi tới trang chủ<i class="fas fa-arrow-circle-right" style="margin-left: 10px"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection