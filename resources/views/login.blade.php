<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Igracious - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="error-body no-top" data-original="/assets/img/tokongnanas-telkom.jpg" style="background-image: url('assets/img/tokongnanas-telkom.jpg'); background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        @if (session()->has('loginError'))
            <div class="alert alert-error" style="position: absolute;display: block;left: 40%;top: 10%;">
                <button data-dismiss="alert" class="close"></button>
                {{ session('loginError') }}
                {{-- <button type="button" class="btn btn-danger btn-sm btn-small pull-right">Take Action</button> --}}
            </div>
        @endif
        <div class="row login-container column-seperation " style="background-color: rgba(229, 233, 236, 0.85)">
            <div class="col-md-5 col-md-offset-1">
                <h2>
                    Sign in to Igracious
                </h2>
                <p>
                    Use your SSO account or your email to sign in.
                    <br>
                    <a href="#">Contact Us</a> for term of using this web application
                </p>
                {{-- <br>
                <button class="btn btn-block btn-info col-md-8" type="button"><span class="pull-left icon-facebook"
                        style="font-style: italic"></span> <span class="bold">Login with
                        Facebook</span></button>
                <button class="btn btn-block btn-success col-md-8" type="button"><span class="pull-left icon-twitter"
                        style="font-style: italic"></span>
                    <span class="bold">Login with Twitter</span></button> --}}
            </div>
            <div class="col-md-5">
                <br>
                <form action="/login" class="login-form validate" id="login-form" method="post" name="login-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-10">
                            <label class="form-label">SSO Login</label>
                            <input class="form-control @error('sso_id') error @enderror" id="sso_id" name="sso_id"
                                autofocus required>
                            @error('sso_id')
                                <label id="sso_id-error" class="error" for="sso_id">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-10">
                            <label class="form-label">Password</label> <span class="help"></span>
                            <input class="form-control" id="password" name="password" type="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="control-group col-md-10">
                            <div class="checkbox checkbox check-success">
                                <a href="#">Trouble login in?</a>&nbsp;&nbsp;
                                <input id="checkbox1" type="checkbox" value="1">
                                <label for="checkbox1">Remember Me!</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row">
                        <div class="col-md-10">
                            <button class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END CONTAINER -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="webarch/js/webarch.js" type="text/javascript"></script>
    <script src="assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
</body>

</html>
