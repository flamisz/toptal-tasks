@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        Test queue jobs and live notifications. If you navigate to the <a href="/test">other page</a> during the process, you still get the notifications.
                    </p>

                    <start-component></start-component>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <notifications-component></notifications-component>
        </div>
    </div>
</div>
@endsection
