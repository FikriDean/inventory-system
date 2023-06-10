<div>
    <div class="input-group mt-3">
        <input type="number" class="form-control @error('amount') text-danger @enderror" placeholder="Product amount..."
            wire:model='amount' wire:keyup="changeAmount" wire:click="changeAmount">
    </div>

    @error('amount')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>