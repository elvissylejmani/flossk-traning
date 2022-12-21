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

    <form action="/post" method="POST">
        @csrf
        User:<input type="text" name="author_id" required>
        Title:<input type="text" name="title" required>
        Des:<input type="text" name="description" required>
        slug:<input type="text" name="slug" required>
        Published:<input type="date" name="published" required>

        <input type="submit">
    </form>
</body>

</html>
