<!DOCTYPE html>
<html>

<head>
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-5">
    <h2>Order Details</h2>
    <input type="text" class="form-control mb-2" value="{{ $transno }}" placeholder="Transaction No">
    <input type="text" class="form-control mb-2" value="{{ $orderno }}" placeholder="Order No">
    <input type="text" class="form-control mb-2" value="{{ $itemid }}" placeholder="Item ID">
    <input type="text" class="form-control mb-2" value="{{ $name }}" placeholder="Item Name">
    <input type="text" class="form-control mb-2" value="{{ $price }}" placeholder="Price">
    <input type="text" class="form-control mb-2" value="{{ $qty }}" placeholder="Quantity">
</body>

</html>