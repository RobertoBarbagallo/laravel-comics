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
    <header>
        <div class="firstheader">
            <div class="container">
                <div class="flex-container">
                    <div class="whitespace">
                    </div>
                    <div class="header-option">DC POWER &#8480; VISA &reg;
                    </div>
                    <div class="header-option">ADDITIONAL DC SITES &#9660;
                    </div>
                </div>
            </div>
        </div>

        <div class="secondheader">
            <div class="container">
                <div class="flex-container">

                    <div class="logo-container">
                        <img src="images/dc-logo.png" alt="">
                    </div>
                    <div class="whitespace"></div>
                    <ul>
                        <li><a href="{{ route ('characters') }}">CHARACTERS</a></li>
                        <li class="hovered"><a href="{{ route ('comics') }}">COMICS</a></li>
                        <li><a href="{{ route ('movies') }}">MOVIES</a></li>
                        <li><a href="{{ route ('tv') }}">TV</a></li>
                        <li><a href="{{ route ('games') }}">GAMES</a></li>
                        <li><a href="{{ route ('collectibles') }}">COLLECTIBLES</a></li>
                        <li><a href="{{ route ('videos') }}">VIDEOS</a></li>
                        <li><a href="{{ route ('fans') }}">FANS</a></li>
                        <li><a href="{{ route ('news') }}">NEWS</a></li>
                        <li><a href="{{ route ('shop') }}">SHOP <span>&#9660;</span></a></li>
                    </ul>
                    <div class="searchbar">
                        Search <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
