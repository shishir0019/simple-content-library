<header class="bg-black">
    <div class="flex justify-between text-white">
        <button id="admin_menu" onclick="closeMenu()" class="btn btn-dark btn--active"><i data-feather="menu"></i></button>
        <div class="flex gap-x-3 flex-1 justify-between">
            <a href="/" class="text-2xl btn btn-dark flex items-center">{{ __('admin.content_library')}}</a>
            <div class="h-full flex">
                @if(Auth::guest())
                    <div class="flex gap-x-3">
                        <a href="{{ route('auth.login.view') }}" class="btn">{{__('login')}}</a>
                        <a href="{{ route('auth.registration.view') }}" class="btn">{{__('registration')}}</a>
                    </div>
                @endif
                @if(Auth::user())
                    <a class="btn btn-dark flex items-center" href="{{ route('auth.user.view', strtolower(Auth::user()->username)) }}" >{{ Auth::user()->name; }}</a>
                @endif
            </div>
        </div>
    </div>
</header>
