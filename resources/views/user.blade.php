@extends('layouts.userdash')

@section('content')
    <h1>Hi, {{ auth()->user()->name }}</h1>
    {{-- @dump($users) --}}
    <hr>
    <div style="background-color: white">
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
                {{ session('success') }} | <strong>201</strong>
            </div>
        @endif
        <div class="col-md-12">
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active">
                        <a href="#tab2hellowWorld" role="tab" data-toggle="tab" aria-expanded="false">User's Details</a>
                    </li>
                    <li class="">
                        <a href="#tab2FollowUs" role="tab" data-toggle="tab" aria-expanded="true">Change Password</a>
                    </li>
                    <li class="">
                        <a href="#tab2Inspire" role="tab" data-toggle="tab" aria-expanded="false">Contact Us</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab2hellowWorld">
                        <div class="row column-seperation">
                            <div class="col-md-6">
                                <h3><span class="semi-bold">Sometimes</span> Small
                                    things in life means
                                    the most</h3>
                            </div>
                            <div class="col-md-6">
                                <h3 class="semi-bold">great tabs</h3>
                                <p class="light">default, the textarea element comes with a vertical scrollbar (and
                                    maybe even a horizontal scrollbar). This vertical scrollbar enables the user to continue
                                    entering and reviewing their text (by scrolling up and down).</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2FollowUs">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Update Your <span class="semi-bold">Passowrd</span>
                                </h3>
                                <br>
                                <form action="/user/passUpdate" method="post">
                                    @csrf
                                    <input style="width: 100%; margin-bottom: 1rem" type="password" name="password"
                                        id="password" placeholder="Current Passowrd" required />
                                    <input style="width: 100%; margin-bottom: 1rem" type="password" name="newPass"
                                        id="newPass" placeholder="New Password" required />
                                    <input style="width: 100%; margin-bottom: 1rem" type="password" name="newRepeat"
                                        id="newRepeat" placeholder="Re-type New Password" required />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <button type="submit" class="btn btn-success btn-cons pull-right">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2Inspire">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Troubled? <span class="semi-bold">Contact Us Now!</span></h4>
                                <h3><span class="semi-bold">Hi Admin</span> Form</h3>
                                <p>Simple, elegant WYSIYG editor that acts as a word editor all necessary actions that is
                                    required to type simple content with style is available in this editor. Its powererd by
                                    HTML5 WYSIYG editor which will work even on any mobile device. Simply place it any
                                    <code>textarea</code>
                                </p>
                                <br>
                                <form action="/none" method="post">
                                    <textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="10"></textarea>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
