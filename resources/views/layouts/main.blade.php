<!DOCTYPE html>
<html>




<head>
    <title>CarLAB KZ - Профессиона́льный чип-тюнинг и ремонт автоэлектроники. </title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name="google" content="notranslate" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

</head>

<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('main.index') }}">{{ config ('app.name') }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item text-black">
                    <a class="nav-link text-black font-weight-bold" href="#">Контакты</a>
                </li>
                <li class="nav-item text-black">
                    <a class="nav-link text-black font-weight-bold" href="#">О нас</a>
                </li>
                <li class="nav-item text-black">
                    <a class="nav-link text-black font-weight-bold" href="#">Главная</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>

<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class=" col-md-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h3 class=" site-heading my-4 mt-3 text-white">{{ config ('app.name') }} 😎</h3>
                    <p class="text-light"> - Профисиональный чип тюнинг и ремонт автоэлектроники.</p>
                    <p class="text-light"> - Отключение сажовых фильтров.</p>
                    <p class="text-light"> - Отключение иммобилайзеров и прошивка чип ключей.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
@include('include.sidebar')

@yield('content')<!-- Footer -->
<footer class="py-3 bg-grey">
    <p class="m-0 text-dark text-center ">Copyright &copy; {{ config('app.name') }}</p>
</footer>
<!-- bootstrap scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>




</html>
