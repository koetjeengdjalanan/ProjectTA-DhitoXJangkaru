@extends('layouts.userdash')

@section('content')
    <h1>User Finder</h1>
    {{-- @dump($users) --}}
    <hr>
    <div style="background-color: white">
        <table class="table table-hover no-more-tables">
            <thead>
                <tr>
                    <th>SSO ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th colspan="2">Action</th>
                    <th></th>
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
