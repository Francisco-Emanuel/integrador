<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create</title>
</head>
<body>
    <h1>create post</h1>
    <form action="/create-card" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="title">
        <textarea name="description" placeholder="desc"></textarea>
        <input type="file" name="dados_imagem">
        <button class="bg-black text-white p-2 rounded-md">criar</button>
    </form>
    <h1>delete post</h1>
    <form action="/delete-card" method="POST">
        @csrf
        <input type="text" name="dTitle" placeholder="title">
        <button class="bg-black text-white p-2 rounded-md">deletar</button>
    </form>
</body>
</html>