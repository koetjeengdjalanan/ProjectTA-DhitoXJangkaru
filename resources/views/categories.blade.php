@extends('layouts.userdash')

@section('content')
    <h1>List Of Categories</h1>
    <hr>
    <div style="background-color: white">
        <ul>
            @foreach ($categories as $category)
                <a href="/categories/{{ $category->slug }}">
                    <li>{{ $category->name }}</li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
