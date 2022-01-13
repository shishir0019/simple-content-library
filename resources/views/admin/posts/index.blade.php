<x-layouts.admin>
<div class="container mx-auto py-2">
                <div class="flex justify-between items-center">
                        <div>{{__('admin.all')}} {{__('admin.posts')}}</div>
                        <div>
                                <a class="btn btn-success" href="{{ route('admin.posts.create') }}">{{ __('admin.add') }} {{ __('admin.post') }}</a>
                        </div>
                </div>
                <hr class="my-2">
                <x-admin.posts :posts="$posts"></x-admin.posts>
        </div>
</x-layouts.admin>
