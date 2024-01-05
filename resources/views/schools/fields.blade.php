<!-- School Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_name', 'School Name:') !!}
    {!! Form::text('school_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>


<!-- Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level', 'Golongan:') !!}
    {!! Form::select('level', ['Siaga' => 'Siaga', 'Penggalang' => 'Penggalang', 'Penegak' => 'Penegak', 'Pandega' => 'Pandega'], null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Ambalan Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ambalan_name', 'Ambalan/Regu Name:') !!}
    {!! Form::text('ambalan_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Gudep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gudep', 'Gudep:') !!}
    {!! Form::text('gudep', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Registration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration', 'Registration:') !!}
    @if(isset($schools))
        @if ($schools['registration'] == 'true')
            <span class="badge badge-success">Registered</span>
        @else
            <span class="badge badge-danger">Not Registered</span>
        @endif
    @endif
    {!! Form::select('registration', ['true' => 'Registered', 'false' => 'Not Registered'], null, ['class' => 'form-control', 'required' => 'required', 'id' => 'registration']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('schools.index') }}" class="btn btn-secondary">Cancel</a>
</div>
