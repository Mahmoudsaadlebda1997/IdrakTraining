<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
            padding: 10px;
            max-width: 500px;
        }

        form {
            border: 1px solid lightgray;
            border-radius: 5px;
            margin: 40px;
            padding: 20px;
        }

        .input {
            margin-top: 10px;
        }

        .buttons {
            margin-top: 25px;
            text-align: right;
            margin-right: 40px;
        }

        label {
            display: inline-block;
            width: 120px;
            font-size: 1.4rem;
            color: gray;
        }

        input {
            font-size: 1.2rem;
        }

        button, input[type="submit"] {
            font-size: 1.2rem;
            color: white;
            border-radius: 10px;
            padding: 10px;
            background-color: #208820;
        }

        button {
            background-color: red;
        }
    </style>
    <title>Create Product</title>
</head>

<body>
<h2>Create Product</h2>
<form action="{{ route('storeProduct') }}" method="POST">
        @csrf
    <div class="input">
        <label>Product Name</label>
        <input
               type="text"
               name="name"
               value="">
    </div>

    <div class="input">
        <label>Product Price</label>
        <input
               type="number"
               name="price"
               value="">
    </div>
    <div class="buttons">
        <input type="submit" value="Submit">
    </div>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

