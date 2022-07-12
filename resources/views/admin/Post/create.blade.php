@extends('admin.master')

@section('title', 'All Post | ' . env('APP_NAME'))

@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create New Category</h1>
    <a class="btn btn-dark" href="{{ route('admin.Post.index') }}">All Posrt</a>
</div>

@include('admin.parts.errors')

<form action="{{ route('admin.Post.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="mb-3">
    <label>Titel</label>
    <input type="text" name="titel" class="form-control" placeholder="titel" />
</div>
<div class="mb-3">
    <label>Descraption</label>
    <input type="text" name="desc" class="form-control" placeholder="Descraption" />
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control" />
</div>


<button class="btn btn-success px-5">Save</button>
</form>
@stop
