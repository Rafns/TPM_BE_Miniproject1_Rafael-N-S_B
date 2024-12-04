<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Music</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('createMusic')}}">Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5">
        <h1 class="text-center">Edit Music</h1>
        <form action="{{route('updateMusic', $music->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input value="{{old('title', $music->title) }}" type="text" class="form-control" id="" name="title">
            </div>

            @error('title')
            <div class="alert alert-warning" role="alert">
             {{$message}}
           </div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Singer</label>
                <input value="{{old('singer', $music->singer) }}" type="text" class="form-control" id="" name="singer">
            </div>

            @error('singer')
            <div class="alert alert-warning" role="alert">
             {{$message}}
           </div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Publication Date</label>
                <input value="{{old('publication_date', $music->publication_date) }}"type="date" class="form-control" id="" name="publication_date">
            </div>

            @error('publication_date')
            <div class="alert alert-warning" role="alert">
             {{$message}}
           </div>
            @enderror


            <div class="mb-3">
                <label for="" class="form-label">Duration (second)</label>
                <input value="{{old('duration', $music->duration) }}" type="number" class="form-control" id="" name="duration">
            </div>

            @error('duration')
            <div class="alert alert-warning" role="alert">
             {{$message}}
           </div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input  type="file" class="form-control" id="" name="image">
            </div>

            @error('image')
            <div class="alert alert-warning" role="alert">
             {{$message}}
           </div>
            @enderror

            <div class="mb-3">
                <label for="" class="form-label">Genre</label>
                <select class="form-select" aria-label="Default select example" name="category_name">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
