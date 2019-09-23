@extends('admin.layout')

@section('header')
    <h1>
        @lang('Roles')
        <small>@lang('Roles List')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> @lang('Home')</a></li>
        <li class="active">@lang('Roles')</li>
    </ol>
@endsection

@section('content')

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">@lang('Roles List')</h3>
        <a href="{{ route('admin.roles.create') }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> @lang('Create Role')
        </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="roles-table" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>@lang('Identification')</th>
            <th>@lang('Name')</th>
            <th>@lang('Permissions')</th>
            <th>@lang('Actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->display_name }}</td>
                    <td>{{ $role->permissions->pluck('display_name')->implode(', ') }}</td>
                    <td>
                        <a href="{{ route('admin.roles.show', $role) }}" 
                            class="btn btn-xs btn-default">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-xs btn-info">
                            <i class="fa fa-pencil"></i>
                        </a>

                        <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" style="display: inline">
                            @csrf @method('DELETE')
                            <button 
                                class="btn btn-xs btn-danger"
                                onclick="return confirm('{{ __('Are you sure to delete this role?') }}')">
                                <i class="fa fa-times"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{-- <tfoot>
            <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
            </tr>
        </tfoot> --}}
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

@endsection

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
    <!-- DataTables -->
    <script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- page script -->
    <script>
        $(function () {
            $('#roles-table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : false,
                'autoWidth'   : false
            })
        })
    </script>
@endpush