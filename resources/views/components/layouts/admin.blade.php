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
    <script src="https://unpkg.com/feather-icons"></script>
    <title>{{__('admin.admin_panel')}}</title>
</head>
<body>

<div class="min-h-screen max-h-screen min-w-screen flex flex-col">
    <x-header.admin></x-header.admin>
    <div class="flex-1 flex">
        <x-sidebar.admin></x-sidebar.admin>
        <div class="h-fill flex flex-col w-full">
            <div class="flex-1 flex flex-col">
                <x-common.breadcrumbs></x-common.breadcrumbs>
                <x-common.notification></x-common.notification>
                <div class="flex-1 overflow-y-scroll">
                    <div class="root" style="height: 0;">
                        <x-main> {{ $slot }} </x-main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    feather.replace()
</script>

</body>
</html>
