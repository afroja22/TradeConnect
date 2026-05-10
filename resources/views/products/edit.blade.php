<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Product</h2>

    <form method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $product->name }}">
        <br><br>

        <textarea name="description">{{ $product->description }}</textarea>
        <br><br>

        <input type="number" name="price" value="{{ $product->price }}">
        <br><br>

        <button type="submit">Update Product</button>
    </form>
</body>
</html>