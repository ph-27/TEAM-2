@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="panel-body">
    <div class="form-horizontal ">
        <div class="form-group">
            <div class="col-sm-1 control-label">
                {!! Form::label('name', 'Name') !!}
            </div>
        <div class="col-sm-11">
            <input class="form-control" name="name" type="text" value="{{ old('name', isset($category) ? $category->name : '') }}" id="name">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-1 control-label">
            {!! Form::label('picture', 'Picture') !!}
        </div>
        <div class="col-sm-11">
            <input class="form-control" name="picture" type="text" value="{{ old('picture', isset($category) ? $category->picture: '') }}" id="picture">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-1 control-label">
            {!! Form::label('slug', 'Slug') !!}
        </div>
        <div class="col-sm-11">
            <input class="form-control" name="slug" type="text" value="{{ old('slug', isset($category) ? $category->slug : '') }}" id="category">
        </div>
    </div>
</div>
{!! Form::submit('Save Category', ['class' => 'btn btn-primary']) !!}
</div>          
