<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::text('category', '', ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', '', ['class' => 'form-control']) !!}
</div>

{{-- Content Field --}}
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', '', ['class' => 'form-control']) !!}
</div>


<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    {!! Form::text('thumbnail', '', ['class' => 'form-control']) !!}
</div>

<!-- Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::text('images', '', ['class' => 'form-control']) !!}
</div>

<!-- Writer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('writer', 'Writer:') !!}
    {!! Form::text('writer', '', ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::text('created_at', '', ['class' => 'form-control']) !!}
</div> --}}

<!-- Updated At Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::text('updated_at', '', ['class' => 'form-control']) !!}
</div> --}}

<!-- Comments Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('comments', 'Comments:') !!}
    {!! Form::text('comments', '', ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
</div>
