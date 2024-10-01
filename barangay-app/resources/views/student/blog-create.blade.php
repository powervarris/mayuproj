<!DOCTYPE html>
<html>
<head>
    <title>Create a Blog Post</title>
    <link rel="stylesheet" type="text/css" href="./css/create.css">
</head>
<body>
<div class="title-container">
<h1>Create Blog Post</h1>
</div>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="{{old('author')}}"><br>
        <label for="blog_title">Blog Title:</label><br>
        <input type="text" id="blog_title" name="blog_title" value="{{old('blog_title')}}"><br>
        <label for="blog_content">Blog Content:</label><br>
        <textarea id="blog_content" name="blog_content">{{old('blog_content')}}</textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

