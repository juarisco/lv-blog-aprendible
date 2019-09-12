@extends('admin.layout')

@section('header')
    <h1>
        @lang('Posts')
        <small>@lang('Posts List')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> @lang('Home')</a></li>
        <li class="active">@lang('Posts')</li>
    </ol>
@endsection

@section('content')

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">@lang('Posts List')</h3>
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> @lang('Create Post')</button>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="posts-table" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>@lang('Title')</th>
            <th>@lang('Excerpt')</th>
            <th>@lang('Actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->excerpt }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post) }}" 
                            class="btn btn-xs btn-default"
                            target="_blank">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-xs btn-info">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{-- route('posts.', $post) --}}" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                        </a>
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
            $('#posts-table').DataTable({
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