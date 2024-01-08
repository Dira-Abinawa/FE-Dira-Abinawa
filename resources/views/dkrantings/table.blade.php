<div class="table-responsive-sm">
    <table class="table table-striped" id="dkrantings-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>School Name</th>
        <th>Level</th>
        <th>Position</th>
        <th>Period</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dkrantings as $dkranting)
            <tr>
                <td>{{ $dkranting->name }}</td>
            <td>{{ $dkranting->school_name }}</td>
            <td>{{ $dkranting->level }}</td>
            <td>{{ $dkranting->position }}</td>
            <td>{{ $dkranting->period }}</td>
            <td>{{ $dkranting->status }}</td>
                <td>
                    {!! Form::open(['route' => ['dkrantings.destroy', $dkranting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dkrantings.show', [$dkranting->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('dkrantings.edit', [$dkranting->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>