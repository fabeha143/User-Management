@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Navbar') }}</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('usertable.index')}}">User Data</a>

                    <a href="{{ route('usertable.create')}}" style="display: block;">Create User</a>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
