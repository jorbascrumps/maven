<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cute kitties!">
    <title>Maven &amp; Co.</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        body {
            background: #FFCE39;
        }
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

@for ($i = 0; $i < 100; $i++)
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
