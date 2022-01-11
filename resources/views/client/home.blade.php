<x-layouts.client>
        Main content
        <div>Auth: {{ Auth::check(); }}</div>
        <div>Guest: {{ Auth::guest(); }}</div>
        <div>User: {{ Auth::user(); }}</div>
</x-layouts.client>
