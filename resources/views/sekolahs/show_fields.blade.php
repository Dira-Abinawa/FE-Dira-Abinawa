<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $sekolah->name }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $sekolah->alamat }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $sekolah->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $sekolah->updated_at }}</p>
</div>

