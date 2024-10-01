<html>
<head>
<link href="{{asset('css/view.css')}}" rel="stylesheet">
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Details</title>
</head>

<body>
<div class="container"> 
    <h2>Blog Details</h2>
 
    <div>
        <table>
            <tr>
                <th>Author</th>
                <td>{{$postBlog->author}}</td>
            </tr>
            <tr>
                <th>Blog Title</th>
                <td>{{$postBlog->blog_title}}</td>
            </tr>
            <tr>
                <th>Blog Content</th>
                <td>{{$postBlog->blog_content}}</td>
            </tr>
            <tr>
                <th>Date Created</th>
                <td>{{$postBlog->date_created}}</td>
            </tr>
        </table>
        </div>
</div>
</body>
</html>