@extends('layouts.master')

@section('header')
	<h2>Add new category</h2>
@endsection

@section('content')
	{!! Form::open(['url' => 'categories']) !!}
	@include('partials.form.category')
	
	{!! Form::close() !!}
@endsection

