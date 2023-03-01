@extends('layouts.blog')
@section('header_block')
    @include('posts.parts.header_section')
@endsection
@section('content')
    @include('posts.parts.card_create')
@endsection
