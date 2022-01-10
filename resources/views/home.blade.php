<x-layout>
        Main content
        <div>Auth: {{ Auth::check(); }}</div>
        <div>Guest: {{ Auth::guest(); }}</div>
        <div>User: {{ Auth::user(); }}</div>
        <div><?php echo 'test text'; ?></div>
</x-layout>
