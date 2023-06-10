<div>
    <div class="d-flex flex-column gap-2">
        <input
            class="role-edit-field limit-width-300 info-edit border-1 border-primary @error('name') text-danger border-danger @enderror rounded"
            type="text" wire:model='name' wire:keyup='updateName'>

        @error('name')  
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <span class="display-none">{{ $name }}</span>

    </div>
</div>
