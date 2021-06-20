<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('page_title')</title>
</head>
<body>
    @include('partials/header')
    <main>
        <div class="jumbotron">
            <img src="images/jumbotron.jpg" alt="">
        </div>
        <section>
            @yield('content')
        </section>
        <section>
            @yield('content2')
        </section>
    </main>
    @include('partials/footer')
</body>
</html>
