@extends('layouts.master')
@section('title', 'Knittersland met BGMEA - BlueBees Limited Blog')
@section('content')
    @include('components.blog-details.knittersland-met-bgmea.banner')
    @include('components.blog-details.knittersland-met-bgmea.content')
    @include('components.contact-call-to-action')
@endsection