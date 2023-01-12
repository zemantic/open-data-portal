<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <nav class=" bg-white w-full flex relative justify-between items-center mx-auto px-8 h-20">
    <!-- logo -->
    <div class="inline-flex">
      <a class="_o6689fn" href="/">
        <div class="hidden md:flex items-center space-x-2">
          <img src="/sllogo.svg" alt="" height="48px" width="48px" />
          <h1 class="text-xl font-bold">Data.health</h1>
        </div>
        <div class="block md:hidden">
          <img src="/sllogo.svg" alt="" height="48px" width="auto" />
          <h1 class="text-2xl">Open Dataa Portal</h1>
        </div>
      </a>
    </div>

    <!-- end logo -->

    <!-- search bar -->
    <div class="hidden sm:block flex-shrink flex-grow-0 justify-start px-2">
      <div class="inline-block">
        <div class="inline-flex items-center max-w-full">

        </div>
      </div>
    </div>
    <!-- end search bar -->

    <!-- login -->
    <div class="flex-initial">
      <div class="flex justify-end items-center relative">

        <div class="flex mr-4 items-center">
          <div class="block relative">
          </div>
        </div>

        <div class="block">
          <div class="inline relative">
            <button type="button" class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
              <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 px-2.5">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation"
                  focusable="false" style="display: block; height: 100%; width: 100%; fill: currentcolor;">
                  <path
                    d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z">
                  </path>
                </svg>
              </div>
              <div class="pl-2">
                Login
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- end login -->
  </nav>
  <!-- Page Content -->
  <main>
    {{ $slot }}
  </main>
</body>

</html>
