@extends('admin.layout')

@section('header')
    <h1>
        @lang('All Posts')
        <small>@lang('Posts List')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> @lang('Home')</a></li>
        <li class="active">@lang('Posts')</li>
    </ol>
@endsection

@section('content')

<div class="box">
        <div class="box-header">
          <h3 class="box-title">@lang('Posts List')</h3>
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
                            <a href="" class="btn btn-xs btn-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="" class="btn btn-xs btn-danger">
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