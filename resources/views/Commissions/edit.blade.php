<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Commission</title>
</head>
<body>
    <h1>Edit Commission</h1>
    <form method="post" action="{{ route('commission.update', $commission->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="Title" value="{{ $commission->Title }}" required />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="Description" value="{{ $commission->Description }}" />
        </div>
        <div>
            <label>Comments</label>
            <input type="text" name="Comments" value="{{ $commission->Comments }}" />
        </div>
        <div>
            <input type="submit" value="Update Commission" />
        </div>
    </form>
</body>
</html>
