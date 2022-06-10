@extends('layouts.master')
@section('title', 'About Us - BlueBees Limited')
@section('content')
	@include('components.about-us.banner')
	@include('components.about-us.content')
	@include('components.contact-call-to-action')
@endsection