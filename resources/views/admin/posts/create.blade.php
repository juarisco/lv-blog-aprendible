@extends('admin.layout')

@section('header')
    <h1>
        @lang('Posts')
        <small>@lang('Create Post')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> @lang('Home')</a></li>
        <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> @lang('Posts')</a></li>
        <li class="active">@lang('Create')</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <form action="">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                    <label for="title">@lang('Post Title')</label>
                    <input type="text"
                        class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="{{ __('Enter here post title') }}">
                    </div>

                    <div class="form-group">
                      <label for="body">@lang('Content Post')</label>
                      <textarea class="form-control" name="body" id="body" rows="10" placeholder="{{ __('Enter full content post') }}"></textarea>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label for="excerpt">@lang('Excerpt Post')</label>
                        <textarea class="form-control" name="excerpt" id="excerpt" rows="3" placeholder="{{ __('Enter an excert from the post') }}"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection