<sidebar id="admin_sidebar" class="h-fill flex flex-col">
    <div class="w-64 bg-gray-300 flex-1 flex flex-col">
        <nav class="flex-1 overflow-y-scroll">
            <div class="sidebar-list" style="height: 0;">
                <a class="{{ Request::url() == route('admin.dashboard.view') ? 'sidebar-list__item bg-blue-300 bg-opacity-60 text-blue-800' : 'sidebar-list__item'}}" href="{{route('admin.dashboard.view')}}"><i data-feather="layout"></i> {{ __('admin.dashboard')}}</a>
                <a class="{{ Request::url() == route('admin.posts.index') ? 'sidebar-list__item bg-blue-300 bg-opacity-60 text-blue-800' : 'sidebar-list__item'}}" href="{{route('admin.posts.index')}}"><i data-feather="file"></i> {{ __('admin.posts')}}</a>
                <a class="{{ Request::url() == route('admin.categories.index') ? 'sidebar-list__item bg-blue-300 bg-opacity-60 text-blue-800' : 'sidebar-list__item'}}" href="{{route('admin.categories.index')}}"><i data-feather="list"></i> {{ __('admin.categories')}}</a>
            </div>
        </nav>
        <div class="bg-black text-white">
            <div class="sidebar-list">
                <a class="{{ Request::url() == route('admin.settings.view') ? 'sidebar-list__item p-3 bg-blue-300 bg-opacity-60 text-blue-800' : 'sidebar-list__item p-3'}}" href="{{route('admin.settings.view')}}"><i data-feather="settings"></i> {{ __('admin.settings')}}</a>
            </div>
        </div>
    </div>
</sidebar>
