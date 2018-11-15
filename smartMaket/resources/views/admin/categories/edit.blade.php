@extends('admin.layouts.master')

@section('header')
	<h2>Edit a category</h2>
@endsection

@section('content')
	<div class="row">
		<div class="col-lg-12">
		  <h3 class="page-header"><i class="fa fa-file-text-o"></i> Edit a category</h3>
		  <ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
			<li><i class="icon_document_alt"></i>Forms</li>
			<li><i class="fa fa-file-text-o"></i>Edit a category</li>
		  </ol>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					Create new category
				</header>
				{!! Form::model($category,['url' => '/categories/'.$category -> id, 'method' => 'PUT']) !!}
					@include('admin.partials.form.category')
				{!! Form::close() !!}
			</section>
		</div>
	</div>
	
@endsection

