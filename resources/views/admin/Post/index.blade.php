@extends('admin.master')

@section('title', 'All post | ' . env('APP_NAME'))

@section('styles')
<style>
    .table th, .table td {
        vertical-align: middle;
    }
</style>
@stop
@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">All post</h1>
    <a class="btn btn-dark" href="{{ route('admin.Post.create') }}">Add New post</a>
</div>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
@endif

<table class="table table-hover table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Titel</th>
        <th>Descraption</th>
        <th>image</th>
        <th>Actions</th>
    </tr>
    @foreach ($post as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->titel }}</td>
        <td>{{ $p->desc }}</td>
        <td><img width="100" src="{{ asset('adminasset/img/post/'.$p->image) }}" alt=""></td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{ route('admin.Post.edit', $p->id) }}"><i class="fas fa-edit"></i></a>
            <form class="d-inline" action="{{ route('admin.Post.destroy', $p->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')"><i class="fas fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<div id="custom-menu" style="position:absolute;width:200px;background:#f00;color:#fff;display:none">
    Bahaa
</div>
@stop



