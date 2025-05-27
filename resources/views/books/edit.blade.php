<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>

    <form action="{{ url('/books/update/' . $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}">
            @error('title') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Author:</label>
            <input type="text" name="author" value="{{ old('author', $book->author) }}">
            @error('author') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label>Year:</label>
            <input type="number" name="year" value="{{ old('year', $book->year) }}">
            @error('year') <small style="color: red;">{{ $message }}</small> @enderror
        </div>

        <button type="submit">Update Book</button>
    </form>
</body>
</html>