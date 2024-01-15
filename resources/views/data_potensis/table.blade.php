<div class="table-responsive-sm">
    <table class="table table-striped" id="dataPotensis-table">
        <thead>
            <tr>
                <th>Gudep</th>
                <th>Male Builder</th>
                <th>Famale Builder</th>
                <th>Male Member</th>
                <th>Famale Member</th>
                <th>Bantara Member</th>
                <th>Laksana Member</th>
                <th>Garuda Member</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPotensis as $dapot)
                <tr>
                    <td>{{ $dapot['gudep'] }}</td>
                    <td>{{ $dapot['male_builder'] }}</td>
                    <td>{{ $dapot['famale_builder'] }}</td>
                    <td>{{ $dapot['male_member'] }}</td>
                    <td>{{ $dapot['famale_member'] }}</td>
                    <td>{{ $dapot['bantara_member'] }}</td>
                    <td>{{ $dapot['laksana_member'] }}</td>
                    <td>{{ $dapot['garuda_member'] }}</td>
                    <td>
                        {!! Form::open(['route' => ['dapot.destroy', $dapot['id']], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dapot.show', [$dapot['id']]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('dapot.edit', [$dapot['id']]) }}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-ghost-danger',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
