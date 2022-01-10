<x-layout>
    <div class="flex p-5">
        <div class="flex-1"></div>
        <form class="flex flex-col gap-y-2 p-5 bg-gray-100" method="POST" action="{{ route('api.auth.registration') }}" style="width: 400px;">
            @foreach ($errors->all() as $error)
                <div class="p-2 bg-red-200">{{ $error }}</div>
            @endforeach
            @csrf
            <div>
                <h1 class="text-2xl">Create a new Account</h1>
            </div>
            <hr>
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input class="border p-2" type="text" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="flex flex-col">
                <label for="name">User Name</label>
                <input class="border p-2" type="text" name="username" value="{{ old('username') }}" required>
            </div>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="border p-2" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input class="border p-2" type="password" name="password">
            </div>
            <hr>
            <div class="flex flex-col">
                <input class="border p-2 uppercase bg-black hover:bg-gray-800 text-white" type="submit" value="submit">
            </div>
            <hr>
            <div class="">
                I am already registered. I need to <a class="text-blue-700 hover:underline" href="{{ route('auth.login.view')  }}">login</a>
            </div>
        </form>
    </div>
</x-layout>
