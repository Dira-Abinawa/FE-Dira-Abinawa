<!-- School Name Field -->
<div class="form-group">
    {!! Form::label('school_name', 'School Name:') !!}
    <p>{{ $schools->school_name }}</p>
</div>

<!-- Ambalan Name Field -->
<div class="form-group">
    {!! Form::label('ambalan_name', 'Ambalan Name:') !!}
    <p>{{ $schools->ambalan_name }}</p>
</div>

<!-- Level Field -->
<div class="form-group">
    {!! Form::label('level', 'Level:') !!}
    <p>{{ $schools->level }}</p>
</div>

<!-- Gudep Field -->
<div class="form-group">
    {!! Form::label('gudep', 'Gudep:') !!}
    <p>{{ $schools->gudep }}</p>
</div>

<!-- Registration Field -->
<div class="form-group">
    {!! Form::label('registration', 'Registration:') !!}
    <p>{{ $schools->registration }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $schools->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $schools->updated_at }}</p>
</div>

