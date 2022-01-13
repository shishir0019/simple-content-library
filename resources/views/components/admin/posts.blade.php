@props(['posts'])

<table class="w-full">
    <thead class="border-b">
        <tr>
            <th class="text-left">{{ __('admin.serial') }}</th>
            <th class="text-right">{{ __('admin.title') }}</th>
            <th class="text-right">{{ __('admin.slag') }}</th>
            <th class="text-right">{{ __('admin.action') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr class="border-b">
                <td class="text-left">{{ $post->id }}</td>
                <td class="text-right">{{ $post->title }}</td>
                <td class="text-right">{{ $post->slag }}</td>
                <td class="text-right">
                    <a href="{{ route('admin.posts.update', $post->id) }}" class="btn btn-success">edit</button>
                    <a href="{{ route('admin.posts.delete', $post->id) }}" class="btn btn-danger">del</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>