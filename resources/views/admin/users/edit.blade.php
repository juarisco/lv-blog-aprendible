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
                    <form action="{{ route('admin.users.roles.update', $user) }}" method="post">
                        @csrf @method('PUT')

                        @foreach ($roles as $id => $name)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="roles[]" id="roles" value="{{ $id }}" 
                                        {{ $user->roles->contains($id) ? 'checked' : '' }}>
                                    {{ $name }}
                                </label>
                            </div>
                            <p></p>
                        @endforeach

                        <button class="btn btn-primary btn-block">@lang('Update Roles')</button>
                    </form>
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Permissions')</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('admin.users.permissions.update', $user) }}" method="post">
                        @csrf @method('PUT')

                        @foreach ($permissions as $id => $name)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="permissions[]" id="permissions" value="{{ $id }}" 
                                        {{ $user->permissions->contains($id) ? 'checked' : '' }}>
                                    {{ $name }}
                                </label>
                            </div>
                            <p></p>
                        @endforeach

                        <button class="btn btn-primary btn-block">@lang('Update Permissions')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection