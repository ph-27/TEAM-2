@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit a product</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Forms</li>
        <li><i class="fa fa-file-text-o"></i>Edit a product</li>
      </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit a product
            </header>
			{!! Form::model($product,['url' => '/products/'.$product -> id, 'method' => 'PUT']) !!}
				@include('admin.partials.form.product')
			{!! Form::close() !!}
        </section>
    </div>
</div>
@endsection