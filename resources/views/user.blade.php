@extends('layouts.master')

@section('content')

<table border="1" cellpadding="10" cellspacing="0" style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%; margin-top: 20px;" >
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">S.No</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Password</th>
            </tr>
        </thead>
        <tbody>
        @if(count($userlist))
                @foreach($userlist as $list)

                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $list->id}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $list->name}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $list->email}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ Bcrypt($list->password)}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">
                        <div style="margin-bottom: 10px;">
                        {!! Form::open(array('url' => route('usertable.edit', ['usertable' => $list->id]), 'method' => 'get')) !!}		
                            {!! Form::submit('Edit', array('class' => 'btn btn-large btn-primary openbutton',)) !!}
                    
                         {!! Form::close() !!}
                         </div>
                         {!! Form::open(array('url' => route('usertable.destroy', ['usertable' => $list->id]), 'method' => 'delete')) !!}		
                            {!! Form::submit('Delete', array('class' => 'btn btn-large btn-primary openbutton')) !!}
                    
                         {!! Form::close() !!}
                            
                        </td>
                        
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="4">No data found!!</td>
            </tr>
            @endif
        
        </tbody>
    </table>
    
@endsection()