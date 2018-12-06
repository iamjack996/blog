@extends('layouts.template')

@section('title','Start Pratice Your Project')
@section('nav-title','Main Page')

@section('content.title', 'Create A New Posts')
@section('content.description', '#TAG To Show And Share Your Life')

@section('content.main')
    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data"> {{--enctype 表單中有file 所以加入--}}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="Slug">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <input type="text" class="form-control" name="content" placeholder="Content">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Position</label>
            <input type="text" class="form-control" name="position" placeholder="Position">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tags</label>
            <input type="text" class="form-control" placeholder="Tags">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Choose Photo</label>
            <input type="file" name="image">
            <p class="help-block">Input one Image Upload.</p>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input class="btn btn-info" type="submit" value="Submit">
            </div>
        </div>
    </form>
@endsection