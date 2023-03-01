@extends('layouts.vpn')


    @section('header_block')
        @include('vpn.parts.header_section')
    @endsection


    @section('intro_block')
        @include('vpn.parts.intro_section')
    @endsection
    @section('benefits_block')
        @include('vpn.parts.benefits_section')
    @endsection
    @section('feature_block')
        @include('vpn.parts.feature_section')
    @endsection
    @section('plan_block')
        @include('vpn.parts.plan_section')
    @endsection
    @section('map_block')
        @include('vpn.parts.map_section')
    @endsection
    @section('clients_block')
        @include('vpn.parts.clients_section')
    @endsection
    @section('customers_block')
        @include('vpn.parts.customers_section')
    @endsection
    @section('buttons_block')
        @include('vpn.parts.buttons_section')
    @endsection
    @section('subscribe_block')
        @include('vpn.parts.subscribe_section')
    @endsection

    @section('footer_block')
        @include('vpn.parts.footer_section')
    @endsection
