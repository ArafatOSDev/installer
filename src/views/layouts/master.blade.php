<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title')</title>

  <link rel="icon" type="image/png" href="{{ config('installer.favicon_path', asset('favicon.ico')) }}"/>

  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer utilities {
        .ml-400 {
            margin-left: 400px !important;
        }
        .preloader {
            position: fixed;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #ffffffd4;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .d-none {
            display: none;
        }

        .bg-gradient {
            background: var(--Text-Style, linear-gradient(90deg, #885CF6 1.73%, rgba(126, 243, 229, 0.97) 101.49%));
        }

        .text-gradient {
            background: linear-gradient(90deg, #8B5CF6 53.09%, rgba(55, 255, 219, 0.70) 81.88%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-style: normal;
        }

        .py-3-2 {
            padding-top: 13px;
            padding-bottom: 13px;
        }

    }
  </style>
</head>
<body>
    @yield('content')

    @stack('script')
</body>
</html>
