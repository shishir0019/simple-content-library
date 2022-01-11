<x-layouts.client>
    <div class="flex p-5">
        <div class="flex-1"></div>
        <form class="form" method="POST" action="{{ route('api.auth.registration') }}" style="width: 400px;">
            <!-- show errors -->
            <x-common.errors/>
            @csrf
            <div>
                <h1 class="text-2xl">{{__('client.create_account')}}</h1>
            </div>
            <hr>
            <div class="form__item">
                <label for="name">{{__('client.name')}}</label>
                <input class="border p-2" type="text" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form__item">
                <label for="name">{{__('client.username')}}</label>
                <input class="border p-2" type="text" name="username" value="{{ old('username') }}" required>
            </div>
            <div class="form__item">
                <label for="email">{{__('client.email')}}</label>
                <input class="border p-2" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form__item">
                <label for="password">{{__('client.password')}}</label>
                <input class="border p-2" type="password" name="password">
            </div>
            <hr>
            <div class="form__item">
                <input class="btn btn-dark btn--full py-3 uppercase" type="submit" value="{{ __('create') }}">
            </div>
            <hr>
            <div class="">
                I am already registered. I need to <a class="text-blue-700 hover:underline" href="{{ route('auth.login.view')  }}">{{__('client.login')}}</a>
            </div>
        </form>
    </div>
</x-layouts.client>
