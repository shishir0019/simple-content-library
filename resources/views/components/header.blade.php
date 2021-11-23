<header class="bg-black">
    <div class="container mx-auto flex justify-between items-center p-2 text-white">
        <a href="/" class="text-3xl">Content library</a>
        <div class="flex items-center gap-x-3">
            <nav>
                <form action="/search" class="bg-gray-500 hover:bg-gray-600 p-1 w-100 flex">
                    <input class="px-3 py-1 outline-none text-gray-800" type="search" placeholder="Search content...">
                    <input class="btn" type="submit" value="Search">
                </form>
            </nav>
            <div class="flex items-center gap-x-3">
                <a href="{{ route('auth.login.form') }}" class="btn">Login</a>
                <a href="{{ route('auth.registration.form') }}" class="btn">Registration</a>
            </div>
        </div>
    </div>
</header>
