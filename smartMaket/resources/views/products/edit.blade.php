@extends('layouts.master')

@section('header')
	<h2>Edit a product</h2>
@endsection

@section('content')
	{!! Form::model($product,['url' => '/products/'.$product -> id, 'method' => 'PUT']) !!}
	@include('partials.form.product')
	{!! Form::close() !!}
@endsection

