@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-table"></i>Table</li>
            <li><i class="fa fa-th-list"></i>Product</li>
          </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @if(isset($category))
                <div class="col-lg-12">
                    <h3 class="panel-heading">All products of {{$category->name}}</h3>
                </div>
            @else
                <div class="col-lg-12">
                    <h3 class="panel-heading">All products</h3>
                </div>
            @endif
            <a class="btn btn-primary pull-right" href="{{route('products.create')}}">Add new product</a>
            <div class="clearfix"></div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr align="center">
            <th>ID</th>
            <th>Category name</th>
            <th>Name</th>
            <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="odd gradeX" align="center">
                <td>{{$product->id}}</td>
            
                <td><a href="{{ route('products.category', ['id' => $product->category_id]) }}">{{$product->category->name}}</a></td>
                <td><a href="{{ route('products.show', $product->id) }}">{{$product->product_name}}</a></td>
                <td><a class="btn btn-warning" href="{{route('products.edit',$product->id)}}">Edit</a></td>
                <td>
                    <form action="{{route('products.destroy', $product->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
    {!! $products->links() !!}
@endsection