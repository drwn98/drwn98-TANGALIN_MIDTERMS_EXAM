<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products List</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>
