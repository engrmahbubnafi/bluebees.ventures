@extends('layouts.master')
@section('title', 'Knittersland - BlueBees Limited')
@section('content')
	@include('components.businesses.knittersland.banner')
	@include('components.businesses.knittersland.content')
	@include('components.contact-call-to-action')
@endsection
