<x-layout>
    <div class="flex p-5">
        <div class="flex-1">
        </div>
        <form class="flex flex-col gap-y-2 p-5 bg-gray-100" method="POST" action="{{ route('auth.login') }}"
              style="width: 400px;">
            @foreach ($errors->all() as $error)
                <div class="p-2 bg-red-200">{{ $error }}</div>
            @endforeach
            @csrf
            <div>
                <h1 class="text-2xl">Login</h1>
            </div>
            <hr>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="border p-2" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input class="border p-2" type="password" name="password" required>
            </div>
            <div class="flex flex-col">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
            <hr>
            <div class="flex flex-col">
                <input class="border p-2 uppercase bg-black hover:bg-gray-800 text-white" type="submit" value="submit">
            </div>
            <hr>
            <div class="">
                I am not registered. I need a <a class="text-blue-700 hover:underline" href="{{ route('auth.registration.form')  }}">account</a>
            </div>
        </form>
    </div>
</x-layout>
