@extends('admin.master')

@section('title', 'Edit post | ' . env('APP_NAME'))

@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit post</h1>
    <a class="btn btn-dark" href="{{ route('admin.Post.index') }}">All post</a>
</div>

<form action="{{ route('admin.Post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<div class="mb-3">
    <label>Titel</label>
    <input type="text" name="titel" class="form-control" value="{{ $post->titel }}" placeholder="Titel" />
</div>

<div class="mb-3">
    <label>Descraption</label>
    <input type="text" name="desc" class="form-control" value="{{ $post->desc }}" placeholder="Descraption" />
</div>

<div class="mb-3">
    <label>Image</label>
    <input id="img-input" type="file" name="image" class="form-control" />
    <img id="img-item" width="70" src="{{ asset('adminasset/img/post/'.$post->image) }}" alt="">
</div>

<button class="btn btn-info px-5">Edit</button>
</form>
@stop


@section('scripts')

<script>
document.querySelector('#img-item').onclick = function() {
    document.querySelector('#img-input').click();
}
document.getElementById('img-input').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;
    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('img-item').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
    // Not supported
    else {
        // fallback -- perhaps submit the input to an iframe and temporarily store
        // them on the server until the user's session ends.
    }
}
</script>

@stop
