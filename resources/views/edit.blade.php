@extends('layouts.master')

@section('content')
{!! Form::open(array('url' => route('usertable.update', ['usertable' => $userlist->id]), 'method' => 'put')) !!}


            <div style="width: 20%; margin-top: 20px; margin-left:10px;">
                {!! Form::text('name',  $userlist->name ,array('class' => 'form-control')) !!}
                {!! Form::text('email',  $userlist->email ,array('class' => 'form-control')) !!}
                {!! Form::text('password','password' , array('class' => 'form-control')) !!}
                <div style="margin-top: 10px;">
                    {!! Form::submit('Edit',array('class' => 'btn btn-large btn-primary openbutton')) !!}
                </div>
                    {!! Form::close() !!}
            </div>
@endsection()