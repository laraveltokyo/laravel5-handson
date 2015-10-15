<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>My Application</title>
</head>

<body>
<h1>アプリケーションのページ</h1>

{{-- @@ Step 14 @@ --}}
<img src="{{ asset('images/laravel.png') }}">

{{-- @@ Step 24 begin @@ --}}
<h2>Todoリスト</h2>

<ul>
@foreach ($todos as $todo)
<li>{{ $todo->title }} : {{ $todo->status }}</li>
@endforeach
</ul>
{{-- @@ Step 24 end @@ --}}

</body>
</html>
