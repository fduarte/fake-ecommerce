@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About this app</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>This is a Laravel based full stack fake ecommerce app.</p>
                    <p>
                        Author: <a href="https://about.me/freddyduarte">Freddy Duarte</a> <br />
                        Code: <a href="https://github.com/fduarte/fake-ecommerce" />Github</p>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
