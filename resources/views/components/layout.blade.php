<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <title>Content library system</title>
</head>
<body>

<div class="min-h-screen min-w-screen flex flex-col">
    <!-- <div class="absolute left-0 top-0 bottom-0 right-0 z-50 bg-opacity-70 bg-black">
        <x-sidebar></x-sidebar>
    </div> -->
    <!-- <div class="absolute left-0 top-0 bottom-0 right-0"> -->
            <x-header></x-header>
            <div class="flex-1">
                <div class="container mx-auto">
                    <x-main> {{ $slot }} </x-main>
                </div>
            </div>
            <x-footer></x-footer>
    <!-- </div> -->
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
