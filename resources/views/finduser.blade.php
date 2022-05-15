@extends('layouts.userdash')

@section('content')
    <h1>User Finder</h1>
    {{-- @dump($users) --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <button class="close" data-dismiss="alert"></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            <button class="close" data-dismiss="alert"></button>
            {{ session('success') }}
        </div>
    @endif
    <hr>
    <div style="background-color: white; padding: 0.5rem;">
        <table class="table table-hover no-more-tables">
            <thead>
                <tr>
                    <th>SSO ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->sso_id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            @switch(Str::substr($user->sso_id, 1, 1))
                                @case(0)
                                    {{ 'Admin' }}
                                @break

                                @case(1)
                                    {{ 'S1 Student' }}
                                @break

                                @case(2)
                                    {{ 'S2 Student' }}
                                @break

                                @case(3)
                                    {{ 'S3 Student' }}
                                @break

                                @case(4)
                                    {{ 'D3 Student' }}
                                @break

                                @case(5)
                                    {{ 'Dean' }}
                                @break

                                @case(6)
                                    {{ 'Teacher' }}
                                @break

                                @case(7)
                                    {{ 'Other' }}
                                @break

                                @default
                                    {{ 'Not Available' }}
                                @break
                            @endswitch
                        </td>
                        <td style="width: 2rem; text-align: right"><a href="#">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        </td>
                        <td style="width: 2rem">
                            <form id='{{ 'f.userDelete.' . $user->id }}' action="/finduser/delete" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value={{ $user->id }}>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <a href="#"
                                    onclick="document.getElementById('{{ 'f.userDelete.' . $user->id }}').submit()">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
