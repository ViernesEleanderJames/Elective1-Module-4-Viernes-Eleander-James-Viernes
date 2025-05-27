<!DOCTYPE html>
<html>

<head>
    <title>Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-5">
    <h2>Item Info</h2>
    <input type="text" class="form-control mb-2" value="{{ $id }}" placeholder="Item No">
    <input type="text" class="form-control mb-2" value="{{ $name }}" placeholder="Item Name">
    <input type="text" class="form-control mb-2" value="{{ $price }}" placeholder="Price">
</body>

</html>