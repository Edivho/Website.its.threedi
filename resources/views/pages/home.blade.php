@extends('layouts.app')

@section('title', 'Its.Threedi — Thrift Store & Business Partner')

@section('content')

    <!-- Section 1: Hero -->
    @include('components.hero')

    <!-- Section 2: About Store -->
    @include('components.about')

    <!-- Section 3: Live TikTok -->
    @include('components.live-section')

    <!-- Section 4: Paket Usaha -->
    @include('components.package-section')

@endsection
