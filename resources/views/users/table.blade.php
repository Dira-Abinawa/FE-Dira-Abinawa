<div class="table-responsive-sm">
    <table class="table table-striped" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>
                @if ($users['active'] == true)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-danger">Not Active</span>
                @endif
            </td>
            <td>
                @if ($users['is_admin'] == true)
                    <span class="badge badge-success">Admin</span>
                @else
                    <span class="badge badge-info">User</span>
                @endif
            </td>  
                <td>
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.edit', [$users->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>