@extends('layouts.layout')
@section('content')

    <h1>{{ Auth::user()->username }}</h1>

@endsection