<div class="table-responsive-sm">
    <table class="table table-striped" id="kategoris-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Decription</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kategoris as $kategori)
            <tr>
                <td>{{ $kategori->name }}</td>
            <td>{{ $kategori->decription }}</td>
                <td>
                    {!! Form::open(['route' => ['kategoris.destroy', $kategori->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kategoris.show', [$kategori->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('kategoris.edit', [$kategori->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>