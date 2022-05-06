@extends('layouts.userdash')

@section('content')
    <h1>List Of Blog Posts With Categoty: {{ $title }}</h1>
    <hr>
    <div style="background-color: white">
        <table class="table table-hover no-more-tables">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    {{-- @dump($post->title) --}}
                    <tr onclick="location.href='/blog/{{ $post->uuid }}';" style="cursor: pointer;">
                        <td>{{ $post->updated_at->format('j M \'y') }}</td>
                        <td>{{ $post->title }}</td>
                        <td colspan="2"><small>{{ $post->excerpt }}</small></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
