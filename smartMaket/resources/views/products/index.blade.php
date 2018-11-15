@extends('layouts.master')

@section('header')
    @if(isset($category))
        <h4>All products of {{$category->name}}</h4>
    @else
       <h4> All products</h4>
    @endif
    <a href="{{route('categories.index')}}">Back to overview</a>
    <a class="btn btn-primary pull-right" href="{{route('products.create')}}">Add new product</a>
    <div class="clearfix"></div>
@endsection

@section('content')
    <table class="table table-border">
        <thead>
            <th>ID</th>
            <th>Category name</th>
            <th>Name</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><a href="/products/categories/{{$product->category->name}}">{{$product->category->name}}</a></td>
                <td><a href="{{route('products.show', $product->id)}}">{{$product->product_name}}</a></td>
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