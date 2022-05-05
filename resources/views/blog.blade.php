@extends('layouts.userdash')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h1>{{ $post->title }}</h1>
            <h3>By: {{ $post->author }}</h3>
        </div>
        {{-- this coloumn bellow need more of your attention --}}
        <div class="col-sm-4">
            <span class="label label-info" onclick="location.href='/categories/{{ $post->category->slug }}';"
                style="cursor: pointer;">{{ $post->category->name }}</span>
        </div>
    </div>
    {!! $post->body !!}
@endsection
