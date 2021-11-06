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

                    {{ __('You are logged in!') }}

                    You're logged in as {{Auth::user()->roles->first()->name}}! <br>
                    Your name is: {{Auth::user()->name}} <br>
                    Your email addrress: {{Auth::user()->email}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
