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
    <h1>Book Store</h1>
    @if(Session('add-success'))
    <div class="alert alert-primary" role="alert">
  {{Session('add-success')}}
</div>
    @endif

<form enctype="multipart/form-data" action="{{url('/addBook')}}" method="POST">
@csrf
    <strong>ISBN Number:</strong><br>
    <input type="text" name="isbn_no"><br>

    <strong >Title:</strong><br>
    <input type="text" name="title"><br>

    <strong >Author:</strong><br>
    <input type="text" name="author"><br>

    <strong >Published year:</strong><br>
    <input type="text" name="published_year"><br>

    <strong >Image:</strong><br>
    <input type="file" name="image"><br>

    <strong >Review:</strong><br>
    <input type="text" name="review"><br>
    
    <strong >Price:</strong><br>
    <input type="text" name="price"><br><br>

    <button type="sumbit">Add Book</button><br><br>
</form>
<form action="{{url('/viewBooks')}}" method="GET">
    <button type="submit">View Books</button><br>
</form>
</body>
</html>