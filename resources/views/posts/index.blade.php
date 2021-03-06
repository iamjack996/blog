@extends('layouts.template')

@section('title','Start Pratice Your Project')
@section('nav-title','Main Page')

@section('content.title', 'Upload Photos')
@section('content.description', 'Share Your Life')

@section('content.main')

    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('storage/' . $post->imageAt) }}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $post->title }}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita
                    laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos
                    perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
    @endforeach

    <!-- Project One -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project One</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita
                laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis
                atque eveniet unde.</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project Two</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque
                repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam
                tempore.</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project Three</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut
                unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti
                alias possimus!</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project Four</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem
                officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in
                suscipit?</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- /.container -->
@endsection