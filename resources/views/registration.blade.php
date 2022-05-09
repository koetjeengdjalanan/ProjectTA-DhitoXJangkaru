@extends('layouts.userdash')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="grid simple form-grid">
                <div class="grid-title no-border">
                    <h4>Singular <span class="semi-bold">Students Account's </span> Registration</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="grid-body no-border">
                    <form action="/registration/administration" id="form_traditional_validation"
                        name="form_traditional_validation" role="form" autocomplete="off" class="validate"
                        novalidate="novalidate" method="POST">
                        @csrf
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="name" name="name" placeholder="Username" type="text"
                                    value="{{ old('name') }}" required>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <input class="form-control" id="password" name="password" placeholder="Password"
                                    type="password" value="{{ Str::random(16) }}">
                            </div>
                            <div class="col-md-1 col-sm-1 px-3">
                                <button class="btn btn-primary">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-12">
                                <input class="form-control" id="email" name="email" placeholder="Mailing Address"
                                    value="{{ old('email') }}" type="email" required>
                            </div>
                        </div>
                        {{-- <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="reg_first_Name" name="reg_first_Name"
                                    placeholder="First Name" type="text" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="reg_first_Name" name="reg_first_Name"
                                    placeholder="Last Name" type="text" required>
                            </div>
                        </div> --}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-actions">
                            <div class="pull-right">
                                <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>
                                    Save</button>
                                <button class="btn btn-white btn-cons" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
