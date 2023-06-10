<div>
    <div class="d-flex flex-column gap-2">
        <input
            class="role-edit-field limit-width-300 info-edit border-1 border-primary @error('level') text-danger border-danger @enderror rounded"
            type="text" wire:model='level' wire:keyup='updateLevel'>

        @error('level') 
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <span class="display-none">{{ $level }}</span>
    </div>
</div>
