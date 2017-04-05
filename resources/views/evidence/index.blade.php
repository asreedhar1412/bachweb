<html>
<body>
    <h1>Evidences</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th> Email</th>
            <th>Image</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($evidence as $evidences)
            <tr>
                <td>{{ $evidences->email }}</td>
                <td>{{ $evidences->image }}</td>
                <td>{{ $evidences->role }}</td>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
</body>
</html>