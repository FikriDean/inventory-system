<div class="input-group">
    <input
        class="w-100 info-edit border-1 border-primary @if (session()->has('name') && session('name') != '') text-danger border-3 border-danger @endif rounded"
        type="text" wire:model='name' wire:keyup='updateName({{ $producttype->id }})'
        wire:key="name-{{ $producttype->id }}">

    <span class="display-none">{{ $name }}</span>

    @error('name')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
