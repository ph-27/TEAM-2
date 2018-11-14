@extends('layouts.master')

@section('header')
	<h2>Edit a category</h2>
@endsection

@section('content')
	{!! Form::model($category,['url' => '/categories/'.$category -> id, 'method' => 'PUT']) !!}
	@include('partials.form.category')
	{!! Form::close() !!}
@endsection

