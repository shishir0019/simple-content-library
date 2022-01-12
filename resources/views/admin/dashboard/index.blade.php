<x-layouts.admin>
        <div>Auth: {{ Auth::check(); }}</div>
        <div>Guest: {{ Auth::guest(); }}</div>
        <div>User: {{ Auth::user(); }}</div>
        <div><?php echo 'test text'; ?></div>
        <div>{{ Request::path(); }}</div>
        <div>{{ Request::url(); }}</div>
        <div>{{route('admin.dashboard.view')}}</div>
</x-layouts.admin>
