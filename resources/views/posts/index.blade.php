@extends('layouts.blog')

@section('header_block')
    @include('posts.parts.header_section')
@endsection

    @section('content')
    <div class="container">
        <div class="panel">
            <div class="panel-default text-center p-4"><h2>Blog project.</h2></div>
        </div>
        @forelse ($posts as $post )
            @include('posts.parts.post_card_min')
        @empty
            <div class="alert alert-info" role="alert">No post yet!</div>
        @endforelse
        <div class="d-flex justify-content-center m-4">
            {{ $posts->links()}}
        </div>

    </div>
    @endsection
