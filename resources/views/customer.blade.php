<!DOCTYPE html>
<html>

<head>
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-5">
    <h2>Customer Info</h2>
    <input type="text" class="form-control mb-2" value="{{ $id }}" placeholder="Customer ID">
    <input type="text" class="form-control mb-2" value="{{ $name }}" placeholder="Name">
    <input type="text" class="form-control mb-2" value="{{ $address }}" placeholder="Address">
</body>

</html>