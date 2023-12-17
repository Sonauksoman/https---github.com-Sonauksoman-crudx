<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <button class="btn btn-primary"><a href="/form" style="text-decoration:none;color:white">add apartment</a></button>
    <button class="btn btn-secondary"><a href="/cart" style="text-decoration:none;color:white">Go to Cart</a></button>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">no of flats</th>
      <th scope="col">place</th>
      <th scope="col">image</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
@foreach($apartments as $apartment)
  <tbody>
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$apartment->apartment_name}}</td>
      <td>{{$apartment->no_of_flats}}</td>
      <td>{{$apartment->place}}</td>
      <td>      <img  width="100px" height="100px" src="{{asset('storage/images/'.$apartment->image)}}" alt="{{$apartment->image}}">
</td>
      <td><button class="btn btn-danger"><a style="text-decoration:none;color:white" href="/delete/{{$apartment->id}}">Delete</a></button></td>
      <td><button class="btn btn-success"><a  style="text-decoration:none;color:white" href="/edit/{{$apartment->id}}">Edit</a></button></td>
      <td><button class="btn btn-secondary"><a  style="text-decoration:none;color:white" href="/cart/{{$apartment->id}}">Add to cart</a></button></td>


    </tr>
  </tbody>
@endforeach
</table>
    
</body>
</html>