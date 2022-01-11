<x-layouts.admin>
        <div>Auth: {{ Auth::check(); }}</div>
        <div>Guest: {{ Auth::guest(); }}</div>
        <div>User: {{ Auth::user(); }}</div>
        <div><?php echo 'test text'; ?></div>
</x-layouts.admin>
