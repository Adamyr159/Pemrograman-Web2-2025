<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Windmill Dashboard</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="./assets/js/init-alpine.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
        <script src="./assets/js/charts-lines.js" defer></script>
        <script src="./assets/js/charts-pie.js" defer></script>

        <script src="{{ asset('js/init-alpine.js') }}"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

            @include('layouts.partials.sidebar')
            @include('layouts.partials.header')

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Dashboard
                    </h2>
                    @yield('content')
                </div>
            </main>
        </div>                    
    </body>

</html>
