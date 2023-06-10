<div>
    <div class="input-group">
        <select class="custom-select" wire:model='newRole' wire:change='updateRole({{ $user->id }})'>
            @foreach ($roles as $roleSelect)
                <option value="{{ $roleSelect->id }}" @if ($roleSelect->id == $role->id) selected @endif>
                    {{ $roleSelect->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>
