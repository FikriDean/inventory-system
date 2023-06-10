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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                @foreach ($producttypes as $producttype)
                    @foreach ($producttype->products as $product)
                        <tr>
                            <td>
                                <img src="{{ asset('images_dean/InveSys.png') }}" class="rounded avatar-40 img-fluid"
                                    alt="{{ $product->name }}">
                            </td>
                            <td>
                                @livewire('product-edit-type', ['product' => $product], key('product-type-' . $product->id))
                            </td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{-- <span class="product-info">{{ $product->product_weight_kg }}</span> --}}
                                <span class="product-edit">
                                    @livewire('product-weight', ['product' => $product], key('weight-' . $product->id))
                                </span>
                            </td>
                            <td>
                                {{-- <span class="product-info">{{ $product->price }}</span> --}}
                                <span class="product-edit">
                                    @livewire('product-price', ['product' => $product], key('price-' . $product->id))
                                </span>

                            </td>
                            <td>
                                {{-- <span class="product-info">{{ $product->stock }}</span> --}}
                                <span class="product-edit">
                                    @livewire('product-stock', ['product' => $product], key('stock-' . $product->id))
                                </span>
                            </td>
                            <td>
                                {{ date('d-m-Y', strtotime($product->updated_at)) }}
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

@section('custom_javascript')
    <script>
        $(document).ready(function() {
            $('#products-table').DataTable({
                'paging': true,
                'searching': true,
            });

            // window.addEventListener('update-items', () => {
            //     window.location.reload(true);
            // })
        });
    </script>
@endsection
