@extends('layouts.master')

@section('header')
    <a href="{{route('products.index')}}">Back to overview</a>
    <h2>{{$product->product_name}}</h2>
    <a class="btn btn-warning" href="{{route('products.edit', $product->id)}}">
        <span class="glyphicon glyphicon-edit"></span>
        Edit
    </a>
    <form action="{{route('products.destroy', $product->id)}}"
        method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <a class="btn btn-danger" href="javascript:void(0);" onclick="$(this).parent().submit();">
            <span class="glyphicon glyphicon-trash"></span>
            Delete
        </a>
    </form>
    
    <p>Last edited: {{$product->updated_at->diffForHumans()}}</p>
@endsection

@section('content')
    <p>Category:
        @if($product->category)
            {{link_to('products/categories/' . $product->category->name, $product->category->name)}}
        @endif
    </p>
    <p>Picture: {{$product->picture}}</p>
    <p>Unit_price: {{$product->unit_price}}</p>
    <p>Imported_date: {{$product->imported_date}}</p>
    <p>Expired_date: {{$product->expir_date}}</p>
    <p>Origin: {{$product->origin}}</p>
    <p>Imported_quantity: {{$product->imp_quantity}}</p>
    <p>Description: {{$product->description}}</p>
    <p>In_stock: {{$product->in_stock}}</p>
    <p>Promotion:
        @if($product->promotion)
            {{link_to('products/promotions/' . $product->promotion->name, $product->promotion->name)}}
        @endif 
    </p>
    <p>Type: {{$product->type}}</p>
    <p>Slug: {{$product->slug}}</p>
@endsection
