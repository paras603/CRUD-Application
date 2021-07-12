<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>CRUD Application</title>
</head>
<body>
    <h1>Update Book Information!! </h1>

    <form enctype="multipart/form-data" action="{{url('updateBook/'.$book->id)}}" method="POST">
    @csrf
    <strong>ISBN Number:</strong><br>
    <input type="text" name="isbn_no" value="{{$book->isbn_no}}"><br>

    <strong >Title:</strong><br>
    <input type="text" name="title" value="{{$book->title}}"><br>

    <strong >Author:</strong><br>
    <input type="text" name="author" value="{{$book->author}}"><br>

    <strong >Published year:</strong><br>
    <input type="text" name="published_year" value="{{$book->published_year}}"><br>

    <strong >Image:</strong><br>
    <input type="file" name="image" value="{{$book->image}}"><br>

    <strong >Review:</strong><br>
    <input type="text" name="review" value="{{$book->review}}"><br>
    
    <strong >Price:</strong><br>
    <input type="text" name="price" value="{{$book->price}}"><br><br>

    <button type="submit">Update</button><br><br>
</form>

</body>
</html>