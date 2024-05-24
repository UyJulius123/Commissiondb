<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commissions</title>
</head>
<body>
    <h1>Commissions</h1>
    <a href="{{ route('commission.create') }}">Create New Commission</a>
    
    @if ($commissions->isEmpty())
        <p>No commissions found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Comments</th>
                    <th>Post Time</th>
                    <th>Update Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commissions as $commission)
                    <tr>
                        <td>{{ $commission->Title }}</td>
                        <td>{{ $commission->Description }}</td>
                        <td>{{ $commission->Comments }}</td>
                        <td>{{ $commission->created_at }}</td> <!-- Display post time -->
                        <td>{{ $commission->updated_at }}</td> <!-- Display update time -->
                        <td>
                            <a href="{{ route('commission.edit', $commission->id) }}">Edit</a>
                            <form action="{{ route('commission.destroy', $commission->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
