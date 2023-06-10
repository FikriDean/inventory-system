<div>
    <button data-toggle="modal" data-target="#addPartner" class="btn btn-primary add-list">
        <i class="las la-plus mr-3"></i>Create Order
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addPartner" tabindex="-1" aria-labelledby="addPartnerLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Create new Order</h5>
                    <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive rounded mb-3">
                        <table class="table mb-0 tbl-server-info" id="products-table">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>Products</th>
                                    <th>Product Type</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price (Thousand)</th>
                                    <th>Amount</th>
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
                                                {{ $producttype->name }}
                                            </td>
                                            <td>
                                                {{ $product->name }}
                                            </td>
                                            <td>
                                                {{ $product->stock }}
                                            </td>
                                            <td>
                                                {{ $product->price }}
                                            </td>
                                            <td>
                                                <input type="number">
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- @foreach ($producttypes as $producttype)
                        <div class="mb-3 border border-3 border-primary p-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>{{ $producttype->name }}</h5>
                                </div>
                            </div>

                            @foreach ($producttype->products as $product)
                                <div class="row">
                                    <div class="col-lg-6">
                                        {{ $product->name }}
                                    </div>

                                    <div class="col-lg-2">
                                        Stock: {{ $product->stock }}
                                    </div>

                                    <div class="col-lg-2">
                                        Price: {{ $product->stock }}
                                    </div>

                                    <div class="col-lg-2">
                                        
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='addPartner'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

@section('custom_javascript')
    <script>
        $(document).ready(function() {
            $('#products-table').DataTable({
                'paging': true,
                'searching': true,
            });

            // window.addEventListener('update-items', () => {
			// 				$('#products-table').DataTable().clear();
							
			// 				$('#products-table').DataTable({
            //     'paging': true,
            //     'searching': true,
            // });
            // })
        });
    </script>
@endsection