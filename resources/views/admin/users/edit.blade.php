@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Personal data')</h3>
                </div>
                <div class="box-body">
                    @if ($errors->any())
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('admin.users.update', $user) }}" method="post">
                        @csrf @method('PUT')

                        <div class="form-group">
                          <label for="name">@lang('Name')</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
                        </div>

                        <div class="form-group">
                          <label for="email">@lang('Email')</label>
                          <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
                        </div>

                        <button class="btn btn-primary btn-block">@lang('Update user')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection