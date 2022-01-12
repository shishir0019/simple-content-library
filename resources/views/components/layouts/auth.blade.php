<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>{{__('admin.admin_panel')}}</title>
</head>

<body>

    <div class="min-h-screen max-h-screen min-w-screen">
        <x-common.notification></x-common.notification>
        <x-main> {{ $slot }} </x-main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        feather.replace()
    </script>

</body>

</html>