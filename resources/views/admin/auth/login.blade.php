<x-layouts.auth>
    <div class="flex justify-center items-center p-5">
        <form class="form bg-transparent" method="POST" action="{{ route('api.admin.auth.login') }}"
              style="width: 400px;">
            <!-- show errors -->
            <x-common.errors/>
            @csrf
            <div>
                <h1 class="text-2xl">{{__('admin.login')}}</h1>
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
                I am not registered. I need an <a class="text-blue-700 hover:underline" href="{{ route('admin.auth.registration.view')  }}">{{__('client.account')}}</a>
            </div>
        </form>
    </div>
</x-layouts.auth>
