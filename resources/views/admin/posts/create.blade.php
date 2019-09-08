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
                        <label>@lang('Date')</label>
        
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input name="published_at" type="text" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="category_id">@lang('Categories')</label>
                      <select class="form-control" name="category_id" id="category_id">
                        <option value="">@lang('Select category')</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="excerpt">@lang('Excerpt Post')</label>
                        <textarea class="form-control" name="excerpt" id="excerpt" rows="3" placeholder="{{ __('Enter an excert from the post') }}"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block">@lang('Save Post')</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@push('styles')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
@endpush

@push('scripts')
    <!-- bootstrap datepicker -->
    <script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    </script>
@endpush


