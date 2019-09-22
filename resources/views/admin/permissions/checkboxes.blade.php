@foreach ($permissions as $id => $name)
    <div class="checkbox">
        <label>
            <input type="checkbox" name="permissions[]" id="permissions" value="{{ $id }}"
                {{ $model->permissions->contains($id) 
                    || collect(old('permissions'))->contains($id) ? 'checked' : '' }}
            >
            {{ $name }}
        </label>
    </div>
@endforeach