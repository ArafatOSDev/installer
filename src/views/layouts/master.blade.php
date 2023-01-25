<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    }
  </style>
</head>
<body>
    @yield('content')

    @stack('script')
</body>
</html>
