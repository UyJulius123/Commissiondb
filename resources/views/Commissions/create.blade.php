<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Commission</h1>
    <form method="post" action="{{route('commission.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <label>Comment</label>
            <input type="text" name="comment" placeholder="Comment" />
        </div>
        <div>
            <input type="submit" value="Save Commission" />
        </div>
    </form>
</body>
</html>