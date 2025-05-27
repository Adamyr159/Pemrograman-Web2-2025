<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE BOOK</title>
</head>
<body>
    <h1>Add New Book</h1>

    <form action="{{ url('/books/store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Author:</label>
            <input type="text" name="author" value="{{ old('author') }}">
            @error('author') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Year:</label>
            <input type="number" name="year" value="{{ old('year') }}">
            @error('year') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <button type="submit">Save Book</button>
    </form>
</body>
</html>