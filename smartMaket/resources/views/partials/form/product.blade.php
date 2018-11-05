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
    {!! Form::label('category_id', 'Category') !!}
    <div class="form-controls">
        {!! Form::select('category_id', isset($categories) ? $categories : [], isset($product) ? $product->category_id : null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('product_name', 'Name') !!}
    <div class="form-controls">
        <input class="form-control" name="product_name" type="text" value="{{ old('product_name', isset($product) ? $product->product_name : '') }}" id="product_name">
    </div>
</div>
<div class="form-group">
    {!! Form::label('picture', 'Picture') !!}
    <div class="form-controls">
        <input class="form-control" name="picture" type="text" value="{{ old('picture', isset($product) ? $product->picture: '') }}" id="picture">
    </div>
</div>
<div class="form-group">
    {!! Form::label('unit_price', 'Unit_price') !!}
    <div class="form-controls">
        <input class="form-control" name="unit_price" type="text" value="{{ old('unit_price', isset($product) ? $product->unit_price : '') }}" id="unit_price">
    </div>
</div>
<div class="form-group">
    {!! Form::label('imported_date', 'Imported_date') !!}
    <div class="form-controls">
        {!! Form::text('imported_date', isset($product) ? $product->imported_date : null, ['class' =>
        'form-control datepicker']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('expired_date', 'Expired_date') !!}
    <div class="form-controls">
        {!! Form::text('expired_date', isset($product) ? $product->expired_date : null, ['class' =>
        'form-control datepicker']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('origin', 'Origin') !!}
    <div class="form-controls">
        <input class="form-control" name="origin" type="text" value="{{ old('origin', isset($product) ? $product->origin : '') }}" id="origin">
    </div>
</div>
<div class="form-group">
    {!! Form::label('imp_quantity', 'Imported_quantity') !!}
    <div class="form-controls">
        <input class="form-control" name="imp_quantity" type="text" value="{{ old('imp_quantity', isset($product) ? $product->imp_quantity : '') }}" id="imp_quantity">
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    <div class="form-controls">
        <input class="form-control" name="description" type="text" value="{{ old('description', isset($product) ? $product->description : '') }}" id="description">
    </div>
</div>
<div class="form-group">
    {!! Form::label('in_stock', 'In_stock') !!}
    <div class="form-controls">
        <input class="form-control" name="in_stock" type="text" value="{{ old('in_stock', isset($product) ? $product->in_stock : '') }}" id="in_stock">
    </div>
</div>
<div class="form-group">
    {!! Form::label('type', 'Type') !!}
    <div class="form-controls">
        <input class="form-control" name="type" type="text" value="{{ old('type', isset($product) ? $product->type : '') }}" id="type">
    </div>
</div>
<div class="form-group">
        {!! Form::label('promotion_id', 'Promotion') !!}
        <div class="form-controls">
            {!! Form::select('promotion_id', isset($promotions) ? $promotions : [], isset($product) ? $product->promotion_id : null, ['class' => 'form-control']) !!}
        </div>
    </div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    <div class="form-controls">
        <input class="form-control" name="slug" type="text" value="{{ old('slug', isset($product) ? $product->slug : '') }}" id="type">
    </div>
</div>

{!! Form::submit('Save Product', ['class' => 'btn btn-primary']) !!}