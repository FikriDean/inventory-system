<div>
				@if (session()->has('partner_deleted'))
								<div class="alert alert-success alert-dismissable fade show d-flex justify-content-between align-items-center">
												<strong>{{ session('partner_deleted') }}</strong>
												<a class="close text-dark c-pointer" data-dismiss="alert" aria-label="close">
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
																				viewBox="0 0 16 16">
																				<path
																								d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
																</svg>
												</a>
								</div>
				@endif

				<div class="table-responsive rounded mb-3">
								<table class="data-tables table mb-0 tbl-server-info">
												<thead class="bg-white text-uppercase">
																<tr class="ligth ligth-data">
																				<th>Products</th>
																				<th>Product Type</th>
																				<th>Name</th>
																				<th>Product Weight (KG)</th>
																				<th>Price (Thousand)</th>
																				<th>Stock</th>
																				<th>Action</th>
																</tr>
												</thead>
												<tbody class="ligth-body">
																@foreach ($producttypes as $producttype)
																				@foreach ($producttype->products as $product)
																								<tr>
																												<td>
																																<img src="{{ asset($product->image) }}" class="rounded avatar-40 img-fluid"
																																				alt="{{ $product->name }}">
																												</td>
																												<td>
																																@livewire('product-edit-type', ['product' => $product], key('product-type-' . $product->id))
																												</td>
																												<td>
																																{{ $product->name }}
																												</td>
																												<td>
																																@livewire('product-weight', ['product' => $product], key('weight-' . $product->id))
																												</td>
																												<td>
																																@livewire('product-price', ['product' => $product], key('price-' . $product->id))
																												</td>
																												<td>
																																@livewire('product-stock', ['product' => $product], key('stock-' . $product->id))
																												</td>
																												<td>
																																@livewire('product-delete', ['product' => $product], key('delete-' . $product->id))
																												</td>
																								</tr>
																				@endforeach
																@endforeach
												</tbody>
								</table>
				</div>
</div>
