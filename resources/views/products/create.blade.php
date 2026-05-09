<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/products">View All Products</a>

    <br><br>
    <h2>Add Product</h2>

    <form method="POST" action="/products">
        @csrf

        <input type="text" name="name" placeholder="Product Name">
        <br><br>

        <textarea name="description" placeholder="Description"></textarea>
        <br><br>

        <input type="number" name="price" placeholder="Price">
        <br><br>

        <button type="submit">Save Product</button>
    </form>
</body>
</html>