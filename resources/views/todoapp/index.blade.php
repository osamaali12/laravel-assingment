@extends('layouts.default')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-offset-2 col-md-8">
          <h2>Todo List</h2>
        <div>
        <a href="{{route('todoapp.create')}}" class="btn-btn-success btn-block">ADD TASK</a>
        </div>
    </div>
  </div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{@message}}</p>
</div>
@endif

<div class="container">
<div class="col-md-offset-2 col-md-8">
 <table class="table">
  <tr>
   <th>Task Name</th>
   <th>Action</th>
  </tr>
 @foreach($todoapp as $todo)
 <tr>
   <td>{{$todo->todo}}</td>
  <td>
   {!! Form::open(['method' => 'DELETE', 'route' => ['todoapp.destroy', $todo->id]]) !!}
   {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
   {!! Form::close() !!}
   </td>
 </tr>
 @endforeach
</table>
</div>
</div>
{!! $todoapp->render() !!}
@endsection