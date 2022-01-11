<x-layouts.client>
    <div class="my-3 flex flex-col gap-y-3">
        <h3 class=" text-3xl">{{ __('client.user_detail')}}</h3>
        <hr>
        <div class="flex justify-between">
            <div class="flex-1">
                <div class="flex gap-2">
                    <div>{{ __('client.name')}}:</div>
                    <div>{{ Auth::user()->name }}</div>
                </div>
                <div class="flex gap-2">
                    <div>{{ __('client.email')}}:</div>
                    <div>{{ Auth::user()->email }}</div>
                </div>
                <div class="flex gap-2">
                    <div>{{ __('client.username')}}:</div>
                    <div>{{ Auth::user()->username }}</div>
                </div>
            </div>
            <div class=""><a class="btn btn-danger" href="{{ route('api.auth.logout')}}">Logout</a></div>
        </div>
    </div>
</x-layouts.client>