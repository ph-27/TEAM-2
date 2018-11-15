@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
        <input class="form-control" name="name" type="text" value="{{ old('name', isset($category) ? $category->name : '') }}" id="name">
    </div>
</div>
<div class="form-group">
    {!! Form::label('picture', 'Picture') !!}
    <div class="form-controls">
        <input class="form-control" name="picture" type="text" value="{{ old('picture', isset($category) ? $category->picture: '') }}" id="picture">
    </div>
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    <div class="form-controls">
        <input class="form-control" name="slug" type="text" value="{{ old('slug', isset($category) ? $category->slug : '') }}" id="category">
    </div>
</div>

{!! Form::submit('Save Category', ['class' => 'btn btn-primary']) !!}