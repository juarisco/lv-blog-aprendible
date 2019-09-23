@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Edit Permission')</h3>
                </div>
                <div class="box-body">
                    
                    @include('partials.error-messages')

                    <form action="{{ route('admin.permissions.update', $permission) }}" method="POST">
                        @csrf @method('PUT')

                        <div class="form-group">
                            <label for="name">@lang('Identification')</label>
                            <input type="text" class="form-control" disabled
                                value="{{ $permission->name }}"
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="display_name">@lang('Name')</label>
                            <input type="text" name="display_name" 
                                id="display_name" 
                                class="form-control" 
                                value="{{ old('display_name', $permission->display_name) }}"
                            >
                        </div>

                        <button class="btn btn-primary btn-block">@lang('Edit Permission')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection