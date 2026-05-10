<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeConnect</title>
</head>
<body>
    <h2>All Products</h2>

@foreach($products as $product)

    <div style="border:1px solid #ccc; padding:15px; margin-bottom:10px;">
        <h3>{{ $product->name }}</h3>

        <p>{{ $product->description }}</p>

        <strong>Price: {{ $product->price }} Tk</strong>
    </div>
    <br><br>

    <a href="/products/{{ $product->id }}/edit">
        Edit
    </a>
    <form action="/products/{{ $product->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>

    </form>
@endforeach
</body>
</html>