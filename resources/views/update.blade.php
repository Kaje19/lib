<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Update</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="editfrm" class="edit-container p-3">
        <form action="{{url('update-book/'.$book->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" value="{{$book->title}}" placeholder="Enter Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Publisher</label>
                <input type="text" name="publisher" class="form-control"  value="{{$book->publisher}}" placeholder="Publisher">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Authors</label>
                <input type="text" name="author" class="form-control" value="{{$book->author}}" placeholder="Authors">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Year Publish</label>
                <input type="text" name="year" class="form-control" value="{{$book->year_publish}}" placeholder="Year Publish">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Volume</label>
                <input type="text" name="volume" class="form-control" value="{{$book->volume}}" placeholder="Volume">
              </div>
              <div class="btn-container">
                <button type="submit" class="btn btn-primary mt-3">Edit</button>
                <a href="{{route('dashboard.return')}}"><div id="editclose" class="btn btn-primary mt-3">Close</div></a>
              </div>
        </form>
    </div>
</body>
</html>