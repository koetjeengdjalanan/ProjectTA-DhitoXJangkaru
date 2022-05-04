{{-- @dd($posts) --}}

@extends('layouts.userdash')

@section('content')
    {{-- <h1>HellowWorld</h1> --}}

    @foreach ($posts as $post)
        <div class="col-md-4 m-b-10">
            <div class="widget-item" onclick="location.href='/blog/{{ $post->id }}';" style="cursor: pointer;">
                <div class="controller overlay right">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
                <div class="tiles green  overflow-hidden full-height" style="max-height:214px">
                    <div class="overlayer bottom-right fullwidth">
                        <div class="overlayer-wrapper">
                            <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                                <div class="pull-right"> <a href="#" class="hashtags transparent"> #Art Design </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/others/10.png" alt="" class="lazy hover-effect-img image-responsive-width">
                </div>
                <div class="tiles white ">
                    <div class="tiles-body">
                        <div class="row">
                            <div class="user-profile-pic text-left"> <img width="69" height="69"
                                    data-src-retina="assets/img/profiles/avatar2x.jpg"
                                    data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar.jpg" alt="">
                                <div class="pull-right m-r-20 m-t-35"> <span class="bold text-black small-text">24m</span>
                                </div>
                            </div>
                            <div class="col-md-5 no-padding">
                                <div class="user-comment-wrapper">
                                    <div class="comment">
                                        <div class="user-name text-black bold"> {{ $post->author }} <span
                                                class="semi-bold">Jester</span>
                                        </div>
                                        <div class="preview-wrapper">@ revox </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-7 no-padding">
                                <div class="clearfix"></div>
                                <div class="m-r-20 m-t-20 m-b-10  m-l-10">
                                    <p class="p-b-10">{{ $post->excerpt }}</p>
                                    <a href="#" class="hashtags m-b-5"> #new york city </a> <a href="#"
                                        class="hashtags m-b-5">
                                        #amazing </a> <a href="#" class="hashtags m-b-5"> #citymax </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
