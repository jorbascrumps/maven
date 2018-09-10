<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cute kitties!">
    <title>Maven &amp; Co.</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <style>
        img[data-src] {
            filter: blur(24px);
        }
        img.fadeInFull {
            filter: blur(0);
            transition: filter 0.25s linear;
        }
    </style>
</head>
<body>
<section class="band primary">
    <header>
        <img
            alt="Maven &amp; Co. logo"
            src="{{ asset('img/logo.png') }}"
        />
        <nav>
            <button
                aria-controls="navigation"
                aria-expanded="false"
                id="jsToggleNavigation"
            >
                &#9776;
            </button>
            <ul id="navigation">
                <li><a href="#">About Maven &amp; Co.</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#"><abbr title="Frequent asked questions">FAQ</abbr></a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Book your free consultation</a></li>
            </ul>
        </nav>
    </header>
</section>

<section class="band">
    <p>
        TODO: Main <a href="#">content</a>
    </p>
    <p>
        TODO: Main content
    </p>
</section>

<section class="band">
    <div>
        <a class="button" href="#">Book your FREE consultation</a>
        <a class="button primary" href="#">BOOK NOW</a>
    </div>
</section>

<section class="band dark">
    <footer>
        TODO: Links
    </footer>
</section>

<section class="band">
    <p class="colophon">
        &copy;{{ now()->year }} Maven &amp; Co. Event Coordination. All rights reserved.
    </p>
</section>

@for ($i = 0; $i < 0; $i++)
    <img
        alt="Cute kitty"
        src="{{ thumbnail('img/party_pup.png') }}"
        data-src="{{ asset('img/party_pup.png') }}"
        height="672"
        weight="708"
    />
@endfor

</body>
</html>
