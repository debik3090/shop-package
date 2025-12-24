<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Products list</title>
</head>
<body>
    <h1>Products</h1>

    @if ($products->isEmpty())
        <p>No products yet.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>
                    {{ $product->name }} (SKU: {{ $product->sku }}) - {{ $product->price }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
