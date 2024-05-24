<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Commission</title>
</head>
<body>
    <h1>Create a Commission</h1>
    <form method="post" action="{{ route('commission.store') }}">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="Title" placeholder="Title" required />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="Description" placeholder="Description" />
        </div>
        <div>
            <label>Comments</label>
            <input type="text" name="Comments" placeholder="Comments" />
        </div>
        <div>
            <input type="submit" value="Save Commission" />
        </div>
    </form>
</body>
</html>
