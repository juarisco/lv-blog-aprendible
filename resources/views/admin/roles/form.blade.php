@csrf

<div class="form-group">
    <label for="name">@lang('Identification')</label>
    @if ($role->exists)
        <input type="text" class="form-control" value="{{ $role->name }}" disabled>
    @else
        <input type="text" name="name" class="form-control" value="{{ old('name', $role->name) }}">
    @endif
</div>

<div class="form-group">
    <label for="display_name">@lang('Name')</label>
    <input type="text" name="display_name" id="display_name" class="form-control" value="{{ old('display_name', $role->display_name) }}">
</div>

{{-- <div class="form-group">
    <label for="guard_name">@lang('Guard')</label>
    <select class="form-control" name="guard_name" id="guard_name">
        @foreach (config('auth.guards') as $guardName => $guard)
            <option {{ old('guard_name', $role->guard_name) === $guardName ? 'selected' : '' }}
                value="{{ $guardName }}">{{ $guardName }}
            </option>
        @endforeach
    </select>
</div> --}}

{{-- <div class="form-group col-md-6">
    <label for="roles">@lang('Roles')</label>
    @include('admin.roles.checkboxes')
</div> --}}

<div class="form-group col-md-6">
    <label for="permissions">@lang('Permissions')</label>
    @include('admin.permissions.checkboxes', ['model' => $role])
</div>