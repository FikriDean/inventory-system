<div class="d-flex flex-column gap-2">
				<input
								class="limit-width-100 info-edit border-1 border-primary @if (session()->has('weight_error') && session('weight_error') != '') text-danger border-3 border-danger @endif rounded"
								type="number" wire:model='newWeight' wire:keyup='updateWeight'>
				@if (session()->has('weight_error') && session('weight_error') != '')
								<strong class="text-danger">{{ session('weight_error') }}</strong>
				@endif

				<span class="display-none">{{ $newWeight }}</span>
				{{-- <p class="info-text display-none">{{ $newWeight }}</p> --}}
</div>
