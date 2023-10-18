<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="head">
        <div class="user">
            <div class="logo">

            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 15">
  <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
</svg>

        </div>
        </div>
        <div class="system_title">
            <h1>Simple Library System</h1>
        </div>
        <div class="logout">
          <a class="logout-btn" href="{{url('/logout')}}"><div class="button">Logout</div></a>
        </div>
    </header>
    <div class="main">
        <div class="button" id="Open">Add Book</div>
    </div>
    <main class="table-container">
       <div class="wrapper vw-100 d-flex justify-content-center align-items-center">
        <table>
            <tr class="row1">
                <td class="col1">ID</td>
                <td class="col2">Title</td>
                <td class="col3">Publisher</td>
                <td class="col4">Author</td>
                <td class="col5">Year publish</td>
                <td class="col6">Volume</td>
            </tr>
            @foreach ($books as $book)
              <tr>
                <td class="data">{{$book->id}}</td>
                <td class="data">{{$book->title}}</td>
                <td class="data">{{$book->publisher}}</td>
                <td class="data">{{$book->author}}</td>
                <td class="data">{{$book->year_publish}}</td>
                <td class="data">{{$book->volume}}</td>
                <td class="edit" id="editshow" ><a href="{{url('edit-book/'.$book->id)}}" >

                  <input class="btn-edit" type="submit" value="Edit"></a></td>
                <td class="delete">
                  <form action="{{route('destroy.book',['book' => $book])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn-delete" value="Delete">
                  </form>
                </td>
              </tr>
            @endforeach
        </table>

       </div>
    </main>

    <div id="addfrm" class="add-container p-3">
        <form action="{{route('book.store')}}" method="post">
          @csrf
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" placeholder="Enter Title">
              </div>
              <div class="form-group">
                <label >Publisher</label>
                <input name="publish" type="text" class="form-control"  placeholder="Publisher">
              </div>
              <div class="form-group">
                <label >Authors</label>
                <input name="author" type="text" class="form-control" placeholder="Authors">
              </div>
              <div class="form-group">
                <label >Year Publish</label>
                <input name="year_pub" type="text" class="form-control" placeholder="Year Publish">
              </div>
              <div class="form-group">
                <label >Volume</label>
                <input name="volume" type="text" class="form-control" placeholder="Volume">
              </div>
              <div class="btn-container">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <div id="close" class="btn btn-primary mt-3">Close</div>
              </div>
        </form>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
