@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Personal data')</h3>
                </div>
                <div class="box-body">
                    
                    @include('partials.error-messages')

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

                        <div class="form-group">
                          <label for="password">@lang('Password')</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="@lang('Password')" autocomplete="new-password">
                          <span class="hekp-block">@lang('Left blank if you are not gonna change your password')</span>
                        </div>

                        <div class="form-group">
                          <label for="password-confirm">@lang('Confirm Password')</label>
                          <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="@lang('Confirm Password')" autocomplete="new-password">
                        </div>

                        <button class="btn btn-primary btn-block">@lang('Update user')</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Roles')</h3>
                </div>
                <div class="box-body">
                    @role('Admin')
                        <form action="{{ route('admin.users.roles.update', $user) }}" method="post">
                            @csrf @method('PUT')

                            @include('admin.roles.checkboxes')

                            <button class="btn btn-primary btn-block">@lang('Update Roles')</button>
                        </form>
                    @else
                        <ul class="list-group">
                            @forelse ($user->roles as $role)
                                <li class="list-group-item">{{ $role->name }}</li>
                            @empty
                                <li class="list-group-item">@lang('Not any roles')</li>
                            @endforelse
                        </ul>
                    @endrole
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Permissions')</h3>
                </div>
                <div class="box-body">
                    @role('Admin')
                        <form action="{{ route('admin.users.permissions.update', $user) }}" method="post">
                            @csrf @method('PUT')

                            @include('admin.permissions.checkboxes', ['model' => $user])

                            <button class="btn btn-primary btn-block">@lang('Update Permissions')</button>
                        </form>
                        @else
                        <ul class="list-group">
                            @forelse ($user->permissions as $role)
                                <li class="list-group-item">{{ $role->name }}</li>
                            @empty
                                <li class="list-group-item">@lang('Not any permissions')</li>
                            @endforelse
                        </ul>
                    @endrole
                </div>
            </div>
        </div>
    </div>
@endsection