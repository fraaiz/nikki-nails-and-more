<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Nikki Nails and More - admin</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="h-screen flex overflow-hidden bg-gray-100">
        @include('admin.layout.menu')
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                <div class="pt-2 pb-6 md:py-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>

</html>
