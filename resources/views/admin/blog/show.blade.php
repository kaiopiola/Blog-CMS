@extends('admin.layouts.app')

@section('content')
    <section id="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="">
                  <img src="{{ $post->image }}" alt="">
                </div>
                <div class="col-12">
                    <div class="content">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
