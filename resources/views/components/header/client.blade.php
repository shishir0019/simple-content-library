<header class="bg-black">
    <div class="container mx-auto flex justify-between items-center p-2 text-white">
        <a href="/" class="text-3xl">{{ __('client.content_library')}} </a>
        <div class="flex items-center gap-x-3">
            <nav>
                <form action="/search" class="bg-gray-500 hover:bg-gray-600 p-1 w-100 flex">
                    <input class="px-3 py-1 outline-none text-gray-800" type="search" name="text" placeholder="{{__('client.searching')}}" autocomplete="off">
                    <input class="btn btn-success" type="submit" value="{{__('client.search')}}">
                </form>
            </nav>
            @if(Auth::guest())
                <div class="flex items-center gap-x-3">
                <a href="{{ route('auth.login.view') }}" class="btn">{{__('client.login')}}</a>
                        <a href="{{ route('auth.registration.view') }}" class="btn">{{__('client.registration')}}</a>
                </div>
            @endif
            @if(Auth::user())
                <div>
                    <a href="{{ route('auth.user.view', strtolower(Auth::user()->username)) }}" >{{ Auth::user()->name; }}</a>
                </div>
            @endif
        </div>
    </div>
</header>
