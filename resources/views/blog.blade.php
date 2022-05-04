@extends('layouts.userdash')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->author }}</h3>
    <p>{{ $post->body }}</p>
@endsection
