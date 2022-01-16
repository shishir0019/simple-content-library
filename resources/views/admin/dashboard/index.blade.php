<x-layouts.admin>
        <div>Auth: {{ Auth::check(); }}</div>
        <div>Guest: {{ Auth::guest(); }}</div>
        <div>User: {{ Auth::user(); }}</div>
        <div><?php echo 'test text'; ?></div>
        <div>{{ Request::path(); }}</div>
        <div>{{ Request::url(); }}</div>
        <div>{{route('admin.dashboard.view')}}</div>
        @php
                $message = 'message info'
        @endphp
        <div class="t relative w-['300px']" style="height: 450px;">
                <x-common.confirm :message="$message" type="del"></x-common.confirm>
        </div>
</x-layouts.admin>
