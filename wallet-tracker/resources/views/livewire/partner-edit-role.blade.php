<div>
				@if (session()->has('role_updated'))
								<div class="alert alert-success d-flex align-items-center role_updated" role="alert">
												<div>
																{{ session('role_updated') }}
												</div>
								</div>
				@endif

				<div class="input-group mb-4">
								<select class="custom-select" wire:model='role'>
												@foreach ($roles as $role)
																<option value="{{ $role->id }}" @if ($role->id == $user->role->id) selected @endif>
																				{{ $role->name }}</option>
												@endforeach
								</select>

				</div>
</div>

@section('custom_scripts')
				<script>
								$(document).ready(function() {
												$(".role_updated").fadeTo(2000, 500).slideUp(500, function() {
																$(".role_updated").slideUp(500);
												});
								});
				</script>
@endsection
