<div class="table-responsive-sm">
    <table class="table table-striped" id="news-table">
        <thead>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Thumbnail</th>
                {{-- <th>Content</th>
                <th>Images</th> --}}
                <th>Writer</th>
                <th>Posted At</th>
                {{-- <th>Updated At</th>
                <th>Comments</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your news data here -->
            @foreach ($newsData as $singleNews)
                <tr>
                    <td>{{ $singleNews['category'] }}</td>
                    <td>{{ $singleNews['title'] }}</td>
                    <td>{{ $singleNews['thumbnail'] }}</td>
                    {{-- <td>{{ $singleNews['content'] }}</td>
                    <td>{{ $singleNews['images'] }}</td> --}}
                    <td>{{ $singleNews['writer'] }}</td>
                    <td>{{ $singleNews['created_at'] }}</td>
                    {{-- <td>{{ $singleNews['updated_at'] }}</td> --}}
                    {{-- <td>Display comments here</td> --}}
                    <td>
                        <!-- Action buttons -->
                        <a href="{{ route('detailNewsUser', [$singleNews['id']]) }}" class='btn btn-success'><i
                                class="fa fa-eye"></i></a>
                        <a href="{{ route('news.edit', [$singleNews['id']]) }}" class='btn btn-info'><i
                                class="fa fa-edit"></i></a>
                        <form action="{{ route('news.destroy', $singleNews['id']) }}" method="POST"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
