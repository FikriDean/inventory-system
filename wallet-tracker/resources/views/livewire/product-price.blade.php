<div class="d-flex flex-column gap-2">
				<input
								class="limit-width-100 info-edit border-1 border-primary @if (session()->has('price_error') && session('price_error') != '') text-danger border-3 border-danger @endif rounded"
								type="number" wire:model='newPrice' wire:keyup='updatePrice'>
				@if (session()->has('price_error') && session('price_error') != '')
								<strong class="text-danger">{{ session('price_error') }}</strong>
				@endif

				<span class="display-none">{{ $newPrice }}</span>

				{{-- <p class="info-text display-none">{{ $newPrice }} K</p> --}}
</div>
