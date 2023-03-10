<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (Session::has('message'))
        {{ Session::get('message') }}
    @endif

    @if ($errors->has('author_id'))
        {{ $errors->first('author_id') }}
    @endif

    <form action="/post/{{ $post['id'] }}" method="POST">
        @csrf
        @method("PATCH")
        User:<input type="text" name="author_id" value="{{ old('author_id', $post['author_id']) }}" required>
        Title:<input type="text" name="title" value="{{ old('title', $post['title']) }}" required>
        Des:<input type="text" name="description" value="{{ old('description', $post['description']) }}" required>
        slug:<input type="text" name="slug" value="{{ old('slug', $post['slug']) }}" required>
        Published:<input type="date" name="published" value="{{ old('published', $post['published']) }}" required>

        <input type="submit">
    </form>

    <br>

    <br>
    Author ID:{{ $post['author_id'] }}
    Title: {{ $post['title'] }}
    Description:{{ $post['description'] }}
    Slug:{{ $post['slug'] }}
    Published:{{ $post['published'] }}

</body>

</html>
