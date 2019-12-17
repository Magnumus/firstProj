<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class NotesController extends Controller
{
    public function index(){
        $notes = App\Note::incomplete();
        return view('welcome', compact('notes'));
    }
    
    public function showOne($id){
        $note = App\Note::find($id);
        return view('show', compact('note'));
    }
}
