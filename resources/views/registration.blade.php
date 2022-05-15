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
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert"></button>
                    {{ session('success') }} | <strong>201</strong>
                </div>
            @endif
            <div class="grid simple form-grid">
                <div class="grid-title no-border">
                    <h4>Add User <span class="semi-bold">Singlular</span></h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="grid-body no-border">
                    <form class="form-no-horizontal-spacing" id="form-condensed" novalidate="novalidate"
                        action="/registration" method="POST">
                        @csrf
                        <div class="row column-seperation">
                            <div class="col-md-6">
                                <h4>Basic Information</h4>
                                <div class="row form-row">
                                    <div class="col-md-12">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Full Name as In National ID / Birth Certificate">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-5">
                                        <select name="gender" id="gender" class="select2 form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="controls">
                                            <input type="text" placeholder="Date of Birth" class="form-control"
                                                id="birthday" name="birthday">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <select name="school" id="school" class="select2 form-control">
                                            <option value="0">--Select School--</option>
                                            @foreach ($schools as $school)
                                                <option value="{{ $school->id }}">{{ $school->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="major" id="major" class="select2 form-control" disabled>
                                            <option value="0">--Select Major--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <select name="campusPlace" id="campusPlace" class="select2 form-control">
                                            <option value="0">Buah Batu</option>
                                            <option value="1">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="email" id="email" type="text" class="form-control"
                                            placeholder="email@address.com">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-12">
                                        <input name="password" id="password" type="text" class="form-control"
                                            placeholder="Password" value="{{ Str::random() }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Postal Information</h4>
                                <div class="row form-row">
                                    <div class="col-md-12">
                                        <input name="address" id="address" type="text" class="form-control"
                                            placeholder="Address">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <input name="cityadd" id="cityadd" type="text" class="form-control"
                                            placeholder="City">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="provadd" id="provadd" type="text" class="form-control"
                                            placeholder="Province / State">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-8">
                                        <input name="countryadd" id="countryadd" type="text" class="form-control"
                                            placeholder="Country" value="Indonesia">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="postal" id="postal" type="text" class="form-control"
                                            placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <input name="form3TeleCode" id="form3TeleCode" type="text" class="form-control"
                                            placeholder="+62">
                                    </div>
                                    <div class="col-md-8">
                                        <input name="phone" id="phone" type="text" class="form-control"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-10">
                                        <input name="sso_id" id="sso_id" type="text" class="form-control"
                                            placeholder="SSO ID" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-sm btn-small"
                                            onclick="generateID()"><i class="fa fa-refresh"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-actions">
                            <div class="pull-left">
                                <div class="checkbox checkbox check-success 	">
                                    <input type="checkbox" value="1" id="chkTerms">
                                    <label for="chkTerms">I am sure the data inserted is correct</label>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-danger btn-cons" type="submit"><i class="icon-ok"></i>
                                    Save</button>
                                <button class="btn btn-white btn-cons" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-title no-border">
                    <h4>Drag n Drop <span class="semi-bold">Uploader</span></h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="grid-body no-border">

                </div>
            </div>
        </div>
    </div>
@endsection
