<x-layouts.admin>
    <div class="flex p-5">
        <form class="form" method="POST" action="{{ route('admin.categories.store') }}"
              style="width: 600px;">
            <!-- show errors -->
            <x-common.errors/>
            @csrf
            <div>
                <h1 class="text-2xl">{{ __('admin.create') }}/{{ __('admin.edit')}} {{ __('admin.category')}}</h1>
            </div>
            <hr>

            <div class="form__item">
                <label for="name">{{__('admin.name')}}</label>
                <input class="border p-2" type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('admin.name') }}" autocomplete="off" required>
            </div>
            <div class="form__item">
                <label for="slag">{{__('admin.slag')}}</label>
                <input class="border p-2" type="text" name="slag" value="{{ old('slag') }}" placeholder="{{ __('admin.slag') }}" autocomplete="off" required>
            </div>
            <hr>
            <div class="form__item">
                <input class="btn btn-dark btn--full py-3 uppercase" type="submit" value="{{ __('admin.save') }}">
            </div>
        </form>
    </div>
</x-layouts.admin>