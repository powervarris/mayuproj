<!DOCTYPE html>
<html lang="en">
<head>
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
    <h1>Blog Info</h1>
<table>
    @foreach ($blogdate as $blogs)
      <tr>
        <td>{{$blogs['author']}}</td>
        <td>{{$blogs['blog_title']}}</td>
        <td>{{$blogs['blog_content']}}</td>
        <td>{{$blogs['date_created']}}</td>
        <td>{{$blogs['email']}}</td>
        <td><a href="{{ route('showBlog', ['id' => $blogs['id']]) }}">View Blog</a></td>
    </tr>
    @endforeach
</table>
    {{ $blogdate->links() }}
<h2>Create Blog</h2>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="blog_title">Blog Title:</label><br>
        <input type="text" id="blog_title" name="blog_title"><br>
        <label for="blog_content">Blog Content:</label><br>
        <textarea id="blog_content" name="blog_content"></textarea><br>
        <input type="submit" value="Submit">
    </form>




</body>
</html>
