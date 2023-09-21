<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Idrak Company</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        .col1{
            background: #1b48ff;
            height:25vh;
        }
        .col2{
            height:100vh;
            overflow-y: scroll;
            padding: 4rem;
        }

        .content-bar {
            height: auto;
            padding: 20px;
        }

        .content-bar .logo-box {
            max-width: 350px;
            height: auto;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 col1 d-none d-sm-block">
            <img src="https://s3-sa-east-1.amazonaws.com/cdn.eskive.com/templates/Eskive/one.svg" alt="Background" class="col-4 p-0 fixed-top min-vh-100" style="object-fit: cover; object-position: right top;">
        </div>
        <div class="col-sm-8 col-xs-12 col2">
    <h1 style="text-align: center; font-size: 70px; color: midnightblue">Welcome To Our Website</h1>
            <div class="content-bar"><!----><div class="logo-box"><img src="https://img0cf.b8cdn.com/images/logo/76/2051676_logo_1614971313_n.png" alt="Logo" class="logo-box img-responsive"></div>

                <p style="color: darkblue">  We Are Idrak Company We Here To Provide u With Sollutions For Ur Problems We Make Mobile Applications + Website Application  Contact Us</p>

                <a href="{{ route('getContactUs') }}"  class="text-center font-semibold" style="color: darkblue; font-size: larger"> Contact Us</a>
                <a href="{{ route('getProducts') }}"  class="text-center font-semibold" style="color: darkblue; font-size: larger"> Products</a>

            </div>
        </div>
    </div>
</div>
</body>
</html>
