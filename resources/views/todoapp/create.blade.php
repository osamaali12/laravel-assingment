@extends('layouts.default')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-offset-2 col-md-8">
          <h2>Add New Task</h2>

        <div>
        <a href="{{route('todoapp.index')}}" class="btn-btn-success btn-block">Go Back</a>
        </div>
    </div>
</div>
</div>
@if(count($errors) > 0)
<div class="alert alert-danger">
<strong>Something went wrong</strong>
<ul>
 @foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif

{!! Form::open(array('route' => 'todoapp.store','method' => 'POST')) !!}
@include('todoapp.form')
{!! Form::close() !!}

@endsection
