<x-layouts.admin>
    <div class="flex p-5">
        <form class="form" method="POST" action="{{ route('admin.posts.store') }}"
              style="width: 600px;">
            <!-- show errors -->
            <x-common.errors/>
            @csrf
            <div>
                <h1 class="text-2xl">{{ __('admin.create') }}/{{ __('admin.edit')}} {{ __('admin.post')}}</h1>
            </div>
            <hr>

            <div class="form__item">
                <label for="name">{{__('admin.title')}}</label>
                <input class="border p-2" type="text" name="title" value="{{old('title', isset($post) ? $post->title : '')}}" placeholder="{{ __('admin.title') }}" autocomplete="off" required>
            </div>
            <div class="form__item">
                <label for="slag">{{__('admin.slag')}}</label>
                <input class="border p-2" type="text" name="slag" value="{{old('slag', isset($post) ? $post->slag : '')}}" placeholder="{{ __('admin.slag') }}" autocomplete="off" required>
            </div>
            <div class="form__item">
                <label for="slag">{{__('admin.categories')}}</label>
                <select class="border p-2" name="category" value="{{old('category', isset($post) ? $post->category : '')}}" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ ( $category->id == old('category', isset($post) ? $post->category : '')) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
                </select>
            </div>
            <hr>
            <div class="form__item">
                <input class="btn btn-dark btn--full py-3 uppercase" type="submit" value="{{ __('admin.save') }}">
            </div>
        </form>
    </div>
</x-layouts.admin>