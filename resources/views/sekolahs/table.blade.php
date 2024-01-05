<div class="table-responsive-sm">
    <table class="table table-striped" id="sekolahs-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Alamat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sekolahs as $sekolah)
            <tr>
                <td>{{ $sekolah->name }}</td>
            <td>{{ $sekolah->alamat }}</td>
                <td>
                    {!! Form::open(['route' => ['sekolahs.destroy', $sekolah->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sekolahs.show', [$sekolah->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sekolahs.edit', [$sekolah->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>