@props(['categories'])

<table class="w-full">
    <thead class="border-b">
        <tr>
            <th class="text-left">{{ __('admin.serial') }}</th>
            <th class="text-right">{{ __('admin.name') }}</th>
            <th class="text-right">{{ __('admin.slag') }}</th>
            <th class="text-right">{{ __('admin.action') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr class="border-b">
                <td class="text-left">{{ $category->id }}</td>
                <td class="text-right">{{ $category->name }}</td>
                <td class="text-right">{{ $category->slag }}</td>
                <td class="text-right">
                    <a href="{{ route('admin.categories.update', $category->id) }}" class="btn btn-success">edit</button>
                    <a onclick="tiggerConfirm()" href="#" class="btn btn-danger">del</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-common.confirm message="Do you want to delete?" type="del" url="{{ route('admin.categories.delete', $category->id) }}" :id="$category->id"></x-common.confirm>