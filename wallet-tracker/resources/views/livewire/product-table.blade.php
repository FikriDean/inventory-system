<div>
    <div class="table-responsive rounded mb-3">
        <table class="table mb-0 tbl-server-info" id="products-table">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>Products</th>
                    <th>Product Type</th>
                    <th>Name</th>
                    <th>Product Weight (KG)</th>
                    <th>Price (Thousand)</th>
                    <th>Stock</th>
                    <th>Last Updated</th>
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
                                {{ $product->product_weight_kg }}
                            </td>
                            <td>
                                {{ $product->price }}
                            </td>
                            <td>
                                {{ $product->stock }}
                            </td>
                            <td>
                                {{ date('Y-m-d', strtotime($product->updated_at)) }}
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
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
