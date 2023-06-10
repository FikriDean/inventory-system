<div>
    <div class="mt-4">
        <div class="input-group mb-4">
            <select class="custom-select" wire:model='status' wire:change='changeStatus'>
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" @if ($status->id == $transaction->id) selected @endif>
                        {{ $status->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
