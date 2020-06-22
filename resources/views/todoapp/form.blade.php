
<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <div class="form-group">
         <strong>Task:</strong>
             {!! Form ::text('todo', null, array('placeholer' => "Task Name", 'class' => 'form-control' )) !!}
       </div>

       <div class="col-md-offset-2 col-md-8">
          <button class="btn btn-block btn-success">Submit</button>
       </div>
    </div>
  </div>
 </div>