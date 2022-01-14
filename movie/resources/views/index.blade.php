<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
    </thead>

    @foreach ($movies as $movie)
    <tr>
        <td>{{ $movie->id }}</td>
        <td >{{ $movie->title }}</td>
        <td >{{ $movie->image_url }}</td>
        <td >{{ $movie->created_at }}</td>
        <td >{{ $movie->updated_at }}</td>
    </tr>
    @endforeach

    <button><a href=""></a></button>
</table>
