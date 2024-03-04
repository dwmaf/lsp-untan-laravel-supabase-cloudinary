<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
        
    </head>
    <body >
        <nav class="w-full h-14 bg-teal-500 flex flex-row items-center gap-3 justify-between">
            <a href="/" class="font-black text-3xl ml-3 ">Saputipu</a>
            @if (Request::is('search') || Request::is('make') || Request::is('yourreport'))
            <div class="flex flex-row gap-5 mr-5">
                <a href="/search">Search</a>
                <a href="/make">Make</a>
                <a href="/yourreport">Your Report</a>
            </div>
            @elseif(Request::is('login') || Request::is('register') || Request::is('/'))
            <div class="flex flex-row gap-5 mr-5">
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            </div>
            @endif
            
            
        </nav>
        @yield('child')
    </body>
</html>
