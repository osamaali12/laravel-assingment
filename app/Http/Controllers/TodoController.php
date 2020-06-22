<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //
    public function index(){
        $todoapp = Todo::latest()->paginate(10);
        return view('todoapp.index', compact('todoapp'))
        ->with('i',(request()->input('page',1) -1) * 5);
    }
    
    public function create(){
        return view('todoapp.create');
    }

    public function store(Request $request){
        request() -> validate([
            'todo' => 'required', ]);
            Todo::create($request->all());
            return redirect()->route('todoapp.index')
            ->with('Success', 'Task created Successfully');
    }

    public function destroy($id){
        Todo::destroy($id);
        return redirect()->route('todoapp.index')
        ->with('Success', 'Task deleted Successfully');
    }
}
