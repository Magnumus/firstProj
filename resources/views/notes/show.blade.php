@extends('layout')
@section('title')
   {{$note->id}}
@endsection
@section('content')
    <h1>You choosed {{$note->id}} task</h1>
    <p>{{$note->note}}</p>
@endsection