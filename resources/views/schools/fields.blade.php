<!-- School Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_name', 'School Name:') !!}
    {!! Form::text('school_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Ambalan Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ambalan_name', 'Ambalan Name:') !!}
    {!! Form::text('ambalan_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level', 'Level:') !!}
    {!! Form::text('level', null, ['class' => 'form-control']) !!}
</div>

<!-- Gudep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gudep', 'Gudep:') !!}
    {!! Form::text('gudep', null, ['class' => 'form-control']) !!}
</div>

<!-- Registration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration', 'Registration:') !!}
    {!! Form::text('registration', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('schools.index') }}" class="btn btn-secondary">Cancel</a>
</div>
