@extends('layouts.master')
@section('title', 'Blogs - BlueBees Limited')
@section('content')
	@include('components.blog.banner')
	@include('components.blog.content')
	@include('components.contact-call-to-action')
@endsection
