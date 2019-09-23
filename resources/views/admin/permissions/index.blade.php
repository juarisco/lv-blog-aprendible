@extends('admin.layout')

@section('header')
    <h1>
        @lang('Permissions')
        <small>@lang('Permissions List')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> @lang('Home')</a></li>
        <li class="active">@lang('Permissions')</li>
    </ol>
@endsection

@section('content')

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">@lang('Permissions List')</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="permissions-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>ID</th>
                <th>@lang('Identification')</th>
                <th>@lang('Name')</th>
                <th>@lang('Actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->display_name }}</td>
                        <td>
                            <a href="{{ route('admin.permissions.edit', $permission) }}" class="btn btn-xs btn-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
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
            $('#permissions-table').DataTable({
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