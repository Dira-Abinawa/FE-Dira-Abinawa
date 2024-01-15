<!-- Gudep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gudep', 'Gudep:') !!}
    {!! Form::text('gudep', null, ['class' => 'form-control']) !!}
</div>

<!-- Male Builder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('male_builder', 'Male Builder:') !!}
    {!! Form::text('male_builder', null, ['class' => 'form-control']) !!}
</div>

<!-- Famale Builder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('famale_builder', 'Famale Builder:') !!}
    {!! Form::text('famale_builder', null, ['class' => 'form-control']) !!}
</div>

<!-- Male Member Field -->
<div class="form-group col-sm-6">
    {!! Form::label('male_member', 'Male Member:') !!}
    {!! Form::number('male_member', null, ['class' => 'form-control']) !!}
</div>

<!-- Famale Member Field -->
<div class="form-group col-sm-6">
    {!! Form::label('famale_member', 'Famale Member:') !!}
    {!! Form::number('famale_member', null, ['class' => 'form-control']) !!}
</div>

<!-- Bantara Member Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bantara_member', 'Bantara Member:') !!}
    {!! Form::number('bantara_member', null, ['class' => 'form-control']) !!}
</div>

<!-- Laksana Member Field -->
<div class="form-group col-sm-6">
    {!! Form::label('laksana_member', 'Laksana Member:') !!}
    {!! Form::number('laksana_member', null, ['class' => 'form-control']) !!}
</div>

<!-- Garuda Member Field -->
<div class="form-group col-sm-6">
    {!! Form::label('garuda_member', 'Garuda Member:') !!}
    {!! Form::number('garuda_member', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dataPotensis.index') }}" class="btn btn-secondary">Cancel</a>
</div>
