@extends('layouts.master')

@section('header')
	<h2>Add new product</h2>
@endsection

@section('content')
	{!! Form::open(['url' => 'products']) !!}
	@include('partials.form.product')
	
	{!! Form::close() !!}
@endsection

