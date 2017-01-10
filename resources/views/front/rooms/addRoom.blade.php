@extends('layouts.app')
@section('title','New Room')

@section('content')

    <div class="col-md-10">
        <div class="row">
            <h2> Add New Room </h2>
            {!! Form::open() !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Room Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>

            {!! Form::submit('Add', ['class' => 'btn btn-info pull-left']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection