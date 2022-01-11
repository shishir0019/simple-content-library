<x-layouts.client>
    <div class="flex p-5">
        <div class="flex-1"></div>
        <form class="form" method="POST" action="{{ route('api.auth.login') }}"
              style="width: 400px;">
            <!-- show errors -->
            <x-common.errors/>
            @csrf
            <div>
                <h1 class="text-2xl">{{__('client.login')}}</h1>
            </div>
            <hr>
            <div class="form__item">
                <label for="email">{{__('client.email')}}</label>
                <input class="border p-2" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form__item">
                <label for="password">{{__('client.password')}}</label>
                <input class="border p-2" type="password" name="password" required>
            </div>
            <div class="form__item">
                <label>
                    <input type="checkbox" name="remember"> {{__('client.remember_me')}}
                </label>
            </div>
            <hr>
            <div class="form__item">
                <input class="btn btn-dark btn--full py-3 uppercase" type="submit" value="{{__('login')}}">
            </div>
            <hr>
            <div class="">
                I am not registered. I need an <a class="text-blue-700 hover:underline" href="{{ route('auth.registration.view')  }}">{{__('client.account')}}</a>
            </div>
        </form>
    </div>
</x-layouts.client>
