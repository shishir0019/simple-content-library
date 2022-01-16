@props(['message', 'type', 'url', 'id'])
<div id="confirm{{$id}}" class="absolute top-0 bottom-0 left-0 right-0 bg-white bg-opacity-70 justify-center items-center hidden">
    <div class="bg-white border p-3">
        <div class=" uppercase">{{ $message }}</div>
        <form class="flex flex-col gap-y-3" action="{{ isset($url) ? $url : '' }}" method="POST" class=" w-[300px]" style="width: 350px;">
            <input class="w-full border p-1" type="text" placeholder="Type COMFIRM">
            <div class="flex justify-end">
                <button type="button" class="btn" onclick="tiggerConfirm()">Cancel</button>
                <button type="button" class="{{ isset($type) ? $type == 'del' ? 'btn btn-danger capitalize' : 'btn btn-success capitalize' : 'btn btn-success capitalize' }}">{{ isset($type) ? $type == 'del' ? 'delete' : 'save' : 'Submit' }}</button>
            </div>
        </form>
    </div>
</div>