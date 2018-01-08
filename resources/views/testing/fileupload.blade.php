@extends('layouts.platform')

@section('content')
    <form method="post" action="/p/sharing/new" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="file">
        <input type="submit" value="verzend">
    </form>
@endsection