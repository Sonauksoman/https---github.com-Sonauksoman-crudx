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
    <div class="container">
        <h3>Cart Form</h3>
    <form method="POST">
        @csrf
        <input type="hidden" value="{{$apartment->id}}" name="id">
        <input  class="form-control @error('name') is-invalid @enderror" type="text" placeholder="apartment name" name="name" value="{{$apartment->apartment_name}}">
        @error('name') <p class="alert alert-danger">{{$message}}</p> @enderror <br>

        <input class="form-control @error('place') is-invalid @enderror" type="text" placeholder="place" name="place" value=" {{$apartment->place}} ">
        @error('place') <p class="alert alert-danger">{{$message}}</p> @enderror <br>

        <input class="form-control @error('flats') is-invalid @enderror" type="text" placeholder="number of flats" name="flats" value="{{$apartment->no_of_flats}} ">
        @error('flats') <p class="alert alert-danger">{{$message}}</p> @enderror <br>
        <input class="form-control @error('quantity') is-invalid @enderror" type="text" placeholder="quantity" name="quantity">
        @error('quantity') <p class="alert alert-danger">{{$message}}</p> @enderror <br>

        <button type="submit">save</button>
</form>
</div>
</body>
</html>