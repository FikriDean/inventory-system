<div>
				<div class="mt-4">
								<div class="input-group mb-4">
												<select class="custom-select" wire:model='producttype' wire:change='updateProducttype'>
																@foreach ($productTypes as $productType)
																				<option value="{{ $productType->id }}" @if ($productType->id == $product->product_type_id) selected @endif>
																								{{ $productType->name }}
																				</option>
																@endforeach
												</select>
								</div>
				</div>
</div>
