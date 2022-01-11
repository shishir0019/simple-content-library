@foreach ($errors->all() as $error)
    <div class="p-2 bg-red-200">{{ $error }}</div>
@endforeach