@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome Admin!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary btn-lg btn-block" href="{{ url('/manageaccounts') }}">manage accounts</a>
                    <a class="btn btn-secondary btn-lg btn-block" href="#">manage games</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
