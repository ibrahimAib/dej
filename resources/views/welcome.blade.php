@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="d-flex justify-content-center">
        <form action="/page" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="file" name="img_path[]" class="form-control" multiple>
        <input type="text" name="name" id="">
        <textarea name="comption" class="form-control mt-2" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-dark mt-1">send</button>
        </form>
    </div>
</div>

@endsection