<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $kategori->name }}</p>
</div>

<!-- Decription Field -->
<div class="form-group">
    {!! Form::label('decription', 'Decription:') !!}
    <p>{{ $kategori->decription }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kategori->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kategori->updated_at }}</p>
</div>

