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
                            <h4 class="mb-3">Order List</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai order yang ada di
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <div class='d-flex justify-content-between'>
                        <div>
                            <button data-toggle="modal" data-target="#addPartner" class="btn btn-primary add-list">
                                <i class="las la-plus mr-3"></i>Create Order
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="addPartner" tabindex="-1" aria-labelledby="addPartnerLabel"
                                aria-hidden="true" wire:ignore.self>
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Create new Order</h5>
                                            <button class="btn" type="button" data-dismiss="modal"
                                                aria-label="Close">X</button>
                                        </div>
                                        <form action="{{ route('order.create', $warehouse->code) }}" method="POST">
                                            @csrf
                                            @method('POST')
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
                                                                            <img src="{{ asset($product->image) }}"
                                                                                class="rounded avatar-40 img-fluid"
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
                                                                            <input type="number" name="{{ $product->id }}"
                                                                                min=0 class="form-control" max="1000000">
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                    aria-label="Close">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    @livewire('order-table', ['orders' => $orders])
                </div>
            </div>
            <!-- Page end  -->
        </div>
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
