<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="./css/blog.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog Info</title>
</head>
<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <div class="container">
  <h1 class="title">BLOG INFORMATION</h1>
  <div class="create">
    <a href="{{ route('createblog') }}" class="btn btn-primary">Create New Blog</a>
    </div>
    </div>

 <div class="container mx-auto">
<table>
  <tr>
    <th>Author</th>
    <th>Blog Title</th>
    <th>Date Created</th>
    <th>Email</th>
    <th>Actions</th>
  </tr>
  @foreach ($blogdate as $blogs)
  <tr>
    <td>{{$blogs['author']}}</td>
    <td>{{$blogs['blog_title']}}</td>
    <td>{{$blogs['date_created']}}</td>
    <td>{{$blogs['email']}}</td>
    <td>
      <button type="button" class="btn btn-primary">
        <a href="{{ route('showBlog', ['id' => $blogs['id']]) }}">View Blog</a>
      </button>
      <button type="button" class="btn btn-warning">
        <a href="{{ route('editBlog', ['id' => $blogs['id']]) }}">Edit Blog</a>
      </button>
    </td>
  </tr>

  @endforeach
</table>

<div class="pagination">
  {{ $blogdate->links() }}
  </div>

</div>




</body>
</html>
