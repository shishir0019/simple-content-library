<x-layouts.auth>
    <div class="flex justify-center items-center p-5">
        <form class="form bg-transparent" method="POST" action="{{ route('api.admin.auth.registration') }}" style="width: 400px;">
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
            <div class="form__item">
                <label for="type">{{__('client.type')}}</label>
                <select class="border p-2 py-3" name="type">
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </div>
            <hr>
            <div class="form__item">
                <input class="btn btn-dark btn--full py-3 uppercase" type="submit" value="{{ __('create') }}">
            </div>
            <hr>
            <div class="">
                I am already registered. I need to <a class="text-blue-700 hover:underline" href="{{ route('admin.auth.login.view')  }}">{{__('client.login')}}</a>
            </div>
        </form>
    </div>
</x-layouts.client>
