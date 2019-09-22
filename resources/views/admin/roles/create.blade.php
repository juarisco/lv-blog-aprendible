@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Create Role')</h3>
                </div>
                <div class="box-body">
                    
                    @include('partials.error-messages')

                    <form action="{{ route('admin.roles.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">@lang('Name')</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="guard_name">@lang('Guard')</label>
                            <select class="form-control" name="guard_name" id="guard_name">
                                @foreach (config('auth.guards') as $guardName => $guard)
                                    <option {{ old('guard_name') === $guardName ? 'selected' : '' }}
                                        value="{{ $guardName }}">{{ $guardName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="form-group col-md-6">
                          <label for="roles">@lang('Roles')</label>
                          @include('admin.roles.checkboxes')
                        </div> --}}

                        <div class="form-group col-md-6">
                          <label for="permissions">@lang('Permissions')</label>
                          @include('admin.permissions.checkboxes', ['model' => $role])
                        </div>

                        <button class="btn btn-primary btn-block">@lang('Create Role')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection