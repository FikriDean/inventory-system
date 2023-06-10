@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('order_success'))
                        <div class="alert alert-success">
                            {{ session('order_success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Product List</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai order yang ada di
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="table-responsive rounded mb-3">
                            <table class="data-tables table mb-0 tbl-server-info">
                                <thead class="bg-white text-uppercase">
                                    <tr class="ligth ligth-data">
                                        <th>No.</th>
                                        <th>Product Name</th>
                                        <th>Product Weight</th>
                                        <th>Price</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="ligth-body">
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
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
                                                {{ $product->pivot->amount }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row border border-primary mb-4">
                <div class="col-lg-6 text-center">
                    Total Price
                </div>
                <div class="col-lg-6 text-center">
                    Rp {{ $order->final_total }},00
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection

@section('custom_javascript')
    <script>
        $(document).ready(function() {
            $('#products-table').DataTable({
                'paging': false,
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
