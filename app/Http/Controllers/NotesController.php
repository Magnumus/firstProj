<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class NotesController extends Controller
{
    public function index(){
        $notes = App\Note::orderBy('created_at','asc')->get();
        return view('notes.welcome', compact('notes'));
    }
    
    public function showOne($id){
        $note = App\Note::find($id);
        return view('notes.show', compact('note'));
    }
    
    public function add_task(Request $req){
        $task = new App\Note;
        $task->note = $req->name;
        $task->save();
        return redirect('/');
    }
    
    public function del_task(App\Note $task){
        $task->delete();
        return redirect('/');
    }
    public function calc($a, $b, $c){
        switch($b){
            case '+': $x = $a + $c;
                break;
            case '-': $x = $a - $c;
                break;
            default: $x = 0;
                break;
        }
        return $x;
    }
}