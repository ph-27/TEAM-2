@extends('layouts.master')

@section('header')
    @if(isset($category))
        <h3>All categories</h3>
    @else
        <h3>All categories</h3>
    @endif
    <a class="btn btn-primary pull-right" href="{{route('categories.create')}}">Add new category</a>
    <div class="clearfix"></div>
@endsection

@section('content')
    <table class="table table-border">
        <thead>
            <th>ID</th>
            <th>Category name</th>
            <th>Picture</th>
            <th>Slug</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></td>
                <td>{{$category->picture}}</td>
                <td>{{$category->slug}}</td>
                <td><a class="btn btn-warning" href="{{route('categories.edit',$category->id)}}">Edit</a></td>
                <td>
                    <form action="{{route('categories.destroy', $category->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h4><a href="/products">All products</a></h4>
@endsection