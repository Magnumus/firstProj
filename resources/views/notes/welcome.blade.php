@extends('layout')
@section('title')
   My tasks
@endsection
@section('content')
      <h1>My tasks</h1>
      <form action="{{url('task')}}" method="post" class="form-horizontal">
         {{csrf_field()}}
         
         <div class="row">
             <div class="form-group col-sm-10">
                    <label for="Task" class="col-sm-7 control-label">Task</label>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Add Task</button>
                        </div>
                    </div>
             </div>
         </div>
          
      </form>
    <ul>
        @foreach ($notes as $note)
           <li class="row">
            <a href="show/{{$note->id}}" class="col-sm-11">{{$note->note}}</a>
            <form action="{{url('task'.$note->id)}}" method="post" class="col-sm-1">
                 {{csrf_field()}}
                 {{method_field('DELETE')}}
                 
                 <button class="btn btn-danger">X</button>
            </form>
            </li>
            <hr>
        @endforeach
    </ul>
@endsection
    


