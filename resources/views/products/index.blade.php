<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font: 16px/1.5 Helvetica, Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th {
            text-align: left;
        }
        tr, col {
            transition: all .3s;
        }
        tbody tr:hover {
            background-color: rgba(0,140,203,.2);
        }
        col.hover {
            background-color: rgba(0,140,203,.2);
        }
    </style>
    <title>All Products</title>
</head>

<body>
<a href="{{ route('createProduct') }}"  class="text-center font-semibold" style="color: darkblue; font-size: larger"> Create Product</a>

<table>
    <col />
    <col />
    <col />
    <col />
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Options</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->updated_at}}</td>
        <td><a href='{{ route("editProduct",$product->id) }}'  class="text-center font-semibold" style="color: blue; font-size: larger"> Edit</a>
        <td><a href='{{ route("showProduct",$product->id) }}'  class="text-center font-semibold" style="color: blue; font-size: larger"> Show</a>
        <td><a href='{{ route("deleteProduct",$product->id) }}'  class="text-center font-semibold" style="color: red; font-size: larger"> Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

