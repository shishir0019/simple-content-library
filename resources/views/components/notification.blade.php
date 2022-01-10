<div id="notification">
    @if (Session::has('global-success'))
        <div class="p-2 bg-green-200">
            <div class="container mx-auto text-green-900 font-bold flex justify-between items-center">
                <div>
                {{ Session::get('global-success') }}
                </div>
                <button onclick="close_global_notification()" class="rounded-full bg-green-700 text-white p-1 flex justify-center items-center" style="width: 35px; height: 35px;">
                    <i data-feather="x"></i>
                </button>
            </div>
        </div>
    @endif
    @if (Session::has('global-error'))
        <div class="p-2 bg-red-200">
            <div class="container mx-auto text-red-900 font-bold flex justify-between items-center">
                <div>
                {{ Session::get('global-error') }}
                </div>
                <button onclick="close_global_notification()" class="rounded-full bg-red-700 text-white p-1 flex justify-center items-center" style="width: 33px; height: 33px;">
                    <i data-feather="x"></i>
                </button>
            </div>
        </div>
    @endif
    @if (Session::has('global-info'))
        <div class="p-2 bg-blue-200">
            <div class="container mx-auto text-blue-900 font-bold flex justify-between items-center">
                <div>
                {{ Session::get('global-info') }}
                </div>
                <button onclick="close_global_notification()" class="rounded-full bg-blue-700 text-white p-1 flex justify-center items-center" style="width: 33px; height: 33px;">
                    <i data-feather="x"></i>
                </button>
            </div>
        </div>
    @endif
</div>