@extends('layouts.master')

@section('header')
    @if(isset($category))
        <h3>All categories</h3>
    @else
        <h3>All categories</h3>
    @endif
    <a class="btn btn-primary pull-right" href="">Add new category</a>
    <div class="clearfix"></div>
@endsection

@section('content')
    <table class="table table-border">
        <thead>
            <th>ID</th>
            <th>Category name</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td><a href="">{{$category->name}}</a></td>
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h4><a href="/products">All products</a></h4>
@endsection