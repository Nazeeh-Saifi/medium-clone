@extends('layouts.app')
@section('content')
    <div id="home" class="p-5">
        <div id="article">
            <div class="row justify-content-center">
                <div class="py-4 col-md-10">
                    <div class="card">
                        <div class="card-header col-lg-12 p-3"
                             style="font-family: 'Merriweather', serif;text-align: center"><h2>
                                <b>{{$articleInfo->title}}</b></h2></div>
                        @if(!($articleInfo->image == "noimage"))
                        <div><img src="/images/{{$articleInfo->image}}" style="width: 100%; height:80vh;" /></div>
                        @endif
                        <div class="row ml-sm-0 mr-sm-0">
                            <div class="col-lg-12 col-sm-6 mb-2 mt-2"
                                 style="font-family: 'Merriweather', serif;text-align: left">
                                <h5><b>{{$articleInfo->description}}</b></h5>
                                <div class="pt-md-5">{!! $articleInfo->content !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
