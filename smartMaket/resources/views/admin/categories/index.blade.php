@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Table</li>
        <li><i class="fa fa-th-list"></i>Category</li>
      </ol>
    </div>
</div>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                            <h3 class="panel-heading">Category List</h3>
                </div>
                <a class="btn btn-primary pull-right" href="{{route('categories.create')}}">Add new category</a>
                <div class="clearfix"></div>
            
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Category name</th>
                            <th>Picture</th>
                            <th>Slug</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="odd gradeX" align="center">
                                <td>{{$category->id}}</td>
                                <td><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></td>
                                <td>{{$category->picture}}</td>
                                <td>{{$category->slug}}</td>
                                <td class="center"><a class="btn btn-warning" href="{{route('categories.edit',$category->id)}}"><i class="fa fa-pencil fa-fw"></i>Edit</a></td>
                                <td>
                                    <form action="{{route('categories.destroy', $category->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger" class="center"><i class="fa fa-trash-o  fa-fw"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
    
    <h4><a href="/products">All products</a></h4>
@endsection