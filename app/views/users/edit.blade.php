@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-2 col-md-offset-2">
        <h1>Edit User</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>


{{ Form::model($user, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('users.update', $user->id))) }}

        <div class="form-group">
            {{ Form::label('email', 'Email:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('password', Input::old('password'), array('input type'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', )) }}
            </div>
        </div>


<div class="form-group">

    <div class="col-md-1 col-md-offset-2">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
    <div class="col-md-1">
        {{ link_to_route('users.show', 'Cancel', $user->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>

    <div class="col-md-offset-10">
        <p>{{ link_to_route('users.index', 'Return to All users', null, array('class'=>'btn btn-lg btn-primary')) }}</p>
    </div>

</div>

{{ Form::close() }}

@stop