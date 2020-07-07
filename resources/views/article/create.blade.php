@extends('layouts.app')

@section('content')
    <div id="articles-create" class="container">
        <div class="row justify-content-center">
            <div class="py-4 col-md-12">
                <div class="card">
                    <div class="card-header">Create New Article</div>

                    <div class="card-body">
                        <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-9">
                                    <input id="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror" name="title"
                                           value="{{old('title')}}"  autocomplete="title">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-9">
                                    <input id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           name="description"
                                           autocomplete="description" value="{{old('description')}}">

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="article-content"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Content') }}</label>

                                <div class="pl-3">
                                    <textarea id="content"  class="form-control my-editor @error('content') is-invalid @enderror" name="content" >{{old('content')}}</textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-lg-5">
                                <div class="col-md-12 p-0">
                                    <button type="submit" class="btn btn-dark btn-block">
                                        {{ __('Add New Article') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
