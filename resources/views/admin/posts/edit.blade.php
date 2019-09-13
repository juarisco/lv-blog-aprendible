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
    @if ($post->photos->count())
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        @foreach ($post->photos as $photo)
                            <form action="{{ route('admin.photos.destroy', $photo) }}" method="POST">
                                @csrf @method('DELETE')
                                <div class="col-md-2">
                                    <button class="btn btn-danger btn-xs" style="position: absolute">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    <img class="img-responsive" src="{{ url($photo->url) }}" alt="">
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group @error('title') has-error @enderror">
                        <label for="title">@lang('Post Title')</label>
                        <input type="text"
                            class="form-control" 
                            name="title" 
                            id="title" 
                            value="{{ old('title', $post->title) }}"
                            placeholder="{{ __('Enter here post title') }}" autofocus>
                        
                        @error('title')
                            <span class="help-block" role="alert">
                                {{ $message }}
                            </span>
                        @enderror                        
                    </div>

                    <div class="form-group @error('body') has-error @enderror">
                        <label for="body">@lang('Content Post')</label>
                        <textarea class="form-control" 
                            name="body" 
                            id="editor" 
                            rows="10" 
                            placeholder="{{ __('Enter full content post') }}">
                            {{ old('body', $post->body) }}
                        </textarea>

                        @error('body')
                            <span class="help-block" role="alert">
                                {{ $message }}
                            </span>
                        @enderror                        

                    </div>

                    <div class="form-group @error('iframe') has-error @enderror">
                        <label for="iframe">@lang('Embeded Content (iframe)')</label>
                        <textarea class="form-control" 
                            name="iframe" 
                            rows="2" 
                            placeholder="{{ __('Enter Embeded Content audio or video') }}">
                            {{ old('iframe', $post->iframe) }}
                        </textarea>

                        @error('iframe')
                            <span class="help-block" role="alert">
                                {{ $message }}
                            </span>
                        @enderror                        

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
                            <input name="published_at" 
                                type="text" 
                                class="form-control pull-right" 
                                value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') : null) }}"
                                id="datepicker">
                        </div>
                    </div>
                    
                    <div class="form-group @error('category') has-error @enderror">
                      <label for="category">@lang('Categories')</label>
                      <select class="form-control" name="category" id="category">
                        <option value="">@lang('Select category')</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                      </select>

                      @error('category')
                            <span class="help-block" role="alert">
                                {{ $message }}
                            </span>
                      @enderror  
                    </div>

                    <div class="form-group @error('tags') has-error @enderror">
                        <label for="tags">@lang('Tags')</label>
                        <select name="tags[]" class="form-control select2" 
                                multiple="multiple" 
                                data-placeholder="{{ __('Select one o more tags') }}"
                                style="width: 100%;">

                            @foreach ($tags as $tag)
                                <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} 
                                    value="{{ $tag->id }}">
                                    {{ $tag->name }}
                                </option>
                            @endforeach
                       
                        </select>

                        @error('tags')
                            <span class="help-block" role="alert">
                                {{ $message }}
                            </span>
                        @enderror  
                    </div>

                    <div class="form-group @error('excerpt') has-error @enderror">
                        <label for="excerpt">@lang('Excerpt Post')</label>
                        <textarea class="form-control" 
                            name="excerpt" 
                            id="excerpt" 
                            rows="3" 
                            placeholder="{{ __('Enter an excerpt from the post') }}">
                        {{ old('excerpt', $post->excerpt) }}
                        </textarea>
                        
                        @error('excerpt')
                            <span class="help-block" role="alert">
                                {{ $message }}
                            </span>
                        @enderror  
                    </div>

                    <div class="form-group">
                        <div class="dropzone"></div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            @lang('Save Post')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

@endsection

@push('styles')
    <!-- dropzone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
@endpush

@push('scripts')
    <!-- dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    <!-- CK Editor -->
    <script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> --}}

    <!-- Select2 -->
    <script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- bootstrap datepicker -->
    <script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        });

        //Initialize Select2 Elements
        $('.select2').select2();
    
        // Replace the <textarea id="editor"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor');
        // CKEDITOR.config.height = 270;
            
        // dropzone
        var myDropzone = new Dropzone('.dropzone',{
            url: "/admin/posts/{{ $post->url }}/photos",
            paramName: 'photo',
            acceptedFiles: 'image/*',
            maxFilesize: 2,
            headers:{
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dictDefaultMessage: '{{ __("Drop files here to upload") }}'
        });

        myDropzone.on('error', function (file, res) {
            var msg = res.errors.photo[0];
            $('.dz-error-message:last > span').text(msg);
        });

        Dropzone.autoDiscover = false;
    </script>
@endpush


