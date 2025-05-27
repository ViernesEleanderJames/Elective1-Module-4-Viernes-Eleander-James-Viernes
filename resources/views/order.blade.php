<!DOCTYPE html>
<html>

<head>
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-5">
    <h2>Order Info</h2>
    <input type="text" class="form-control mb-2" value="{{ $cid }}" placeholder="Customer ID">
    <input type="text" class="form-control mb-2" value="{{ $cname }}" placeholder="Customer Name">
    <input type="text" class="form-control mb-2" value="{{ $orderno }}" placeholder="Order No">
    <input type="text" class="form-control mb-2" value="{{ $date }}" placeholder="Order Date">
</body>

</html>