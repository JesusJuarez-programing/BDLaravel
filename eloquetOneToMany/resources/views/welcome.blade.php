@extends('layout.app')

@section('title', 'Welcome')

@section('body')
    Welcome
    @foreach($mobiles as $mobile)
        <h1>{{ $mobie->number}}
    @endforeach
@endsection