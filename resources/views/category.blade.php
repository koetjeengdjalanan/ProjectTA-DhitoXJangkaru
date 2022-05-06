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
                    <th colspan="2">Action</th>
                    {{-- <th></th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    {{-- @dump($post->title) --}}
                    <tr onclick="location.href='/blog/{{ $post->uuid }}';" style="cursor: pointer;">
                        <td>{{ $post->updated_at->format('j M \'y') }}</td>
                        <td>{{ Str::limit($post->title, 40, '...') }}</td>
                        <td colspan="2"><small>{{ Str::limit($post->excerpt, 90, '...') }}</small></td>
                        <td><a href="#">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        </td>
                        <td><a href="#">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
