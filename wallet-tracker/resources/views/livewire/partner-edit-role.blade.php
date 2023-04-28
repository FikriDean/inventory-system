<div>
				<div class="mt-4">
								<div wire:loading wire:target="role">
												Changing role...
								</div>

								<div class="input-group mb-4">
												<select class="custom-select" wire:model='role'>
																@foreach ($roles as $role)
																				<option value="{{ $role->id }}" @if ($role->id == $user->role->id) selected @endif>
																								{{ $role->name }}</option>
																@endforeach
												</select>
								</div>
				</div>
</div>
