<div class="d-flex flex-column gap-2">
				<input
								class="limit-width-100 info-edit border-1 border-primary @if (session()->has('stock_error') && session('stock_error') != '') text-danger border-3 border-danger @endif rounded"
								type="number" wire:model='newStock' wire:keyup='updateStock'>
				@if (session()->has('stock_error') && session('stock_error') != '')
								<strong class="text-danger">{{ session('stock_error') }}</strong>
				@endif
			
				<span class="display-none">{{ $newStock }}</span>

				{{-- <p class="info-text display-none">{{ $newStock }}</p> --}}
</div>
