<!DOCTYPE html>
<html>
<head>
<link href="{{asset('css/edit.css')}}" rel="stylesheet">
    <title>Edit a Blog Post</title>
</head>
<body>
<div class="title-container">
<h1>Edit Blog Post</h1>
</div>
    <form action="{{route('updateBlog', ['id'=>$postBlog['id']])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="{{ $postBlog['author'] }}"><br>
        <label for="blog_title">Blog Title:</label><br>
        <input type="text" id="blog_title" name="blog_title" value="{{ $postBlog['blog_title'] }}"><br>
        <label for="blog_content">Blog Content:</label><br>
        <textarea id="blog_content" name="blog_content">{{ $postBlog['blog_content'] }}</textarea><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
