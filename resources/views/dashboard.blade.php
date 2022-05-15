{{-- @dd($posts) --}}

@extends('layouts.userdash')

@section('content')
    {{-- <h1>HellowWorld</h1> --}}
    <?php $child = 0; ?>
    <div class="row" style="display: flex; align-items: stretch;">
        @foreach ($posts as $post)
            <?php $child++; ?>
            {{-- @dump($post->user->name) --}}
            <div class="col-md-4 m-b-10">
                <div class="widget-item" onclick="location.href='/blog/{{ $post->uuid }}';" style="cursor: pointer;">
                    {{-- <div class="controller overlay right">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div> --}}
                    <div class="tiles green  overflow-hidden full-height" style="max-height:214px">
                        <div class="overlayer bottom-right fullwidth">
                            <div class="overlayer-wrapper">
                                <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                                    <div class="pull-right"> <a href="categories/{{ $post->category->slug }}"
                                            class="hashtags transparent">{{ $post->category->name }}</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <img src={{ $post->thumbnail }} alt="" class="lazy hover-effect-img image-responsive-width">
                    </div>
                    <div class="tiles white ">
                        <div class="tiles-body">
                            <div class="row">
                                {{-- <div class="user-profile-pic text-left"> --}}
                                {{-- <img width="69" height="69" data-src-retina="assets/img/profiles/bc2x.jpg" data-src="assets/img/profiles/bc.jpg"
                                        src="assets/img/profiles/bc.jpg" alt=""> --}}
                                @if (empty($post->user->name))
                                    <div class="col-md-7 text-black bold">
                                        Anony
                                        <span class="semi-bold"> Mouse</span>
                                    </div>
                                @else
                                    <div class="col-md-7 text-black bold">
                                        {{ Str::before($post->user->name, ' ') }}
                                        <span class="semi-bold">{{ Str::afterLast($post->user->name, ' ') }}</span>
                                    </div>
                                @endif
                                {{-- <div class="pull-right m-r-20 m-t-35"> <span --}}
                                <div class="col-md-5"> <span
                                        class="bold text-black small-text">{{ $post->updated_at->format('D, d M y') }}</span>
                                </div>
                                {{-- </div> --}}
                                {{-- <div class="col-md-5 m-t-4">
                                    <div class="user-comment-wrapper">
                                        <div class="comment">
                                            <div class="user-name text-black bold">
                                                {{ Str::before($post->user->name, ' ') }}
                                                <span
                                                    class="semi-bold">{{ Str::afterLast($post->user->name, ' ') }}</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-12 no-padding">
                                    <div class="clearfix" style="text-align: center">
                                        <h3><strong>{{ $post->title }}</strong></h3>
                                    </div>
                                    <div class="m-r-20 m-t-20 m-b-10  m-l-10"
                                        style="text-align: justify;text-justify: inter-word;">
                                        {{ Str::limit($post->excerpt, 125, '...') }}
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row no-padding">
                                <div class="col-md-12">
                                    <a href="#" class="hashtags m-b-5"> #new york city </a> <a href="#"
                                        class="hashtags m-b-5">
                                        #amazing </a> <a href="#" class="hashtags m-b-5"> #citymax </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($child === 3)
    </div>
    <div class="row" style="display: flex; align-items: stretch;">
        @endif
        @endforeach
    </div>
@endsection
