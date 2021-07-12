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
    <h1>Available Books</h1><br><br>

    @if(Session('update-success'))
    <div class="alert alert-primary" role="alert">
    {{Session('update-success')}}
    </div>
    @endif

  @if(Session('delete-success'))
  <div class="alert alert-primary" role="alert">
    {{Session('delete-success')}}
  </div>
  @endif

    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">ISBN No.</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Published year</th>
      <th scope="col">Image</th>
      <th scope="col">Review</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
        @foreach($data as $book)
        <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->isbn_no}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->published_year}}</td>
        <td>
          <img src="{{asset('image/'.$book -> image)}}" style="height:40px;width: 60px;">
        </td>
        <td>{{$book->review}}</td>
        <td>{{$book->price}}</td>
        <td>
          <form action="{{url('/edit/'.$book->id)}}">
            <button type="submit" class="btn btn-primary">Edit</button>
          </form><br>
          <form action="{{url('/deleteBook/'.$book->id)}}">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
        </tr>
        
        @endforeach  
    

  </tbody>
</table>
</body>
</html>