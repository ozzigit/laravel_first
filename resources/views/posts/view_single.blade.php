@extends('layouts.blog')
@section('header_block')
    @include('posts.parts.header_section')
@endsection
@section('content')
  <div class="container">
        <div class="panel">
            <div class="panel-default text-center p-4"><h2>Blog project.</h2></div>
        </div>
        @include('posts.parts.post_card')

    </div>

@endsection
