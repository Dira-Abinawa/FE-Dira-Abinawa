<div class="table-responsive-sm">
    <table class="table table-striped" id="news-table">
        <thead>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Content</th>
                <th>Images</th>
                <th>Writer</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Comments</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newsData as $singleNews)
                <tr>
                    <td>{{ $singleNews['category'] }}</td>
                    <td>{{ $singleNews['title'] }}</td>
                    <td>{{ $singleNews['thumbnail'] }}</td>
                    <td>{{ $singleNews['content'] }}</td>
                    <td>{{ $singleNews['images'] }}</td>
                    <td>{{ $singleNews['writer'] }}</td>
                    <td>{{ $singleNews['created_at'] }}</td>
                    <td>{{ $singleNews['updated_at'] }}</td>
                    <td>{{ $singleNews['comments'] }}</td>
                    <td>
                        {!! Form::open(['route' => ['news.destroy', $singleNews['id']], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('news.show', [$singleNews['id']]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('news.edit', [$singleNews['id']]) }}" class='btn btn-ghost-info'><i
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
