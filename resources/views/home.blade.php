@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: solid 1px black;">
                <div class="card-header bg-dark text-white">{{ __('Bienvenido ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


        <div align="center"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/LOGO_FAGOR.jpg/640px-LOGO_FAGOR.jpg"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
