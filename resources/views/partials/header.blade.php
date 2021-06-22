<html>
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
                        <img src={{ asset ("images/dc-logo.png")}} alt="logo">
                    </div>
                    <div class="whitespace"></div>
                    @php
                    function setClass(...$selectedRoutes){
                        $actualRoute = Request::route()->getName();
                        $contains= array_search($actualRoute, $selectedRoutes);

                        return $contains !== false ? "clicked" : "";
                    }
                    @endphp
                    <ul>
                        <li class={{setClass('characters')}}><a href="{{ route ('characters') }}">CHARACTERS</a></li>
                        <li class={{setClass('comics', 'singleComic')}}><a href="{{ route ('comics') }}">COMICS</a></li>
                        <li class={{setClass('movies')}}><a href="{{ route ('movies') }}">MOVIES</a></li>
                        <li class={{setClass('tv')}}><a href="{{ route ('tv') }}">TV</a></li>
                        <li class={{setClass('games')}}><a href="{{ route ('games') }}">GAMES</a></li>
                        <li class={{setClass('collectibles')}}><a href="{{ route ('collectibles') }}">COLLECTIBLES</a></li>
                        <li class={{setClass('videos')}}><a href="{{ route ('videos') }}">VIDEOS</a></li>
                        <li class={{setClass('fans')}}><a href="{{ route ('fans') }}">FANS</a></li>
                        <li class={{setClass('news')}}><a href="{{ route ('news') }}">NEWS</a></li>
                        <li class={{setClass('shop')}}><a href="{{ route ('shop') }}">SHOP <span>&#9660;</span></a></li>
                    </ul>
                    <div class="searchbar">
                        Search <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>


</html>