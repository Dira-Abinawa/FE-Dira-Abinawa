<div class="table-responsive-sm">
    <table class="table table-striped" id="schools-table">
        <thead>
            <tr>
                <th>School Name</th>
        <th>Ambalan Name</th>
        <th>Level</th>
        <th>Gudep</th>
        <th>Registration</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schools as $schools)
            <tr>
                <td>{{ $schools->school_name }}</td>
            <td>{{ $schools->ambalan_name }}</td>
            <td>{{ $schools->level }}</td>
            <td>{{ $schools->gudep }}</td>
            <td>{{ $schools->registration }}</td>
                <td>
                    {!! Form::open(['route' => ['schools.destroy', $schools->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schools.show', [$schools->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('schools.edit', [$schools->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>