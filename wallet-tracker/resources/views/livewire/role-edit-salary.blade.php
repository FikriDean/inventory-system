<div>
    <div class="d-flex flex-column gap-2">
        <input
            class="role-edit-field limit-width-300 info-edit border-1 border-primary @error('salary') text-danger border-danger @enderror rounded"
            type="number" wire:model='salary' wire:keyup='updateSalary'>

        @error('salary')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <span class="display-none">{{ $salary }}</span>

    </div>
</div>
