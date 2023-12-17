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
        <h3>Apartment Form</h3>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <input  class="form-control @error('name') is-invalid @enderror" type="text" placeholder="apartment name" name="name">
        @error('name') <p class="alert alert-danger">{{$message}}</p> @enderror <br>

        <input class="form-control @error('place') is-invalid @enderror" type="text" placeholder="place" name="place">
        @error('place') <p class="alert alert-danger">{{$message}}</p> @enderror <br>

        <input class="form-control @error('flats') is-invalid @enderror" type="text" placeholder="number of flats" name="flats" >
        @error('flats') <p class="alert alert-danger">{{$message}}</p> @enderror <br>

        <input class="form-control @error('flats') is-invalid @enderror" type="file" name="image" >
        @error('flats') <p class="alert alert-danger">{{$message}}</p> @enderror <br>

        <button type="submit">save</button>
</form>
</div>
</body>
</html>