<x-layouts.admin>
        <div class="container mx-auto py-2">
                <div class="flex justify-between items-center">
                        <div>{{__('admin.all')}} {{__('admin.categoy')}}</div>
                        <div>
                                <a class="btn btn-success" href="{{ route('admin.categories.create') }}">{{ __('admin.add') }} {{ __('admin.category') }}</a>
                        </div>
                </div>
                <hr class="my-2">
                <x-admin.categories :categories="$categories"></x-admin.categories>
        </div>
</x-layouts.admin>