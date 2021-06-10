@extends('layouts.master')

@section('content')

<div style="margin-top: 20px; width: 20%; margin-top: 20px; margin-left:10px;">
{{ Form::open(array('route' => 'usertable.store' , 'method' => 'POST')) }}

            {!! Form::text('name', 'Name',array('class' => 'form-control')) !!}
            {!! Form::text('email', 'Email',array('class' => 'form-control')) !!}
            {!! Form::text('password', 'Password',array('class' => 'form-control')) !!}
            <div style="margin-top: 10px;">
                {{ Form::submit('Add',array('class' => 'btn btn-large btn-primary openbutton'))}}
            </div>
{{ Form::close() }}

</div>
@endsection()