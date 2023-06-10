@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('product_type_success'))
                        <div class="alert alert-success">
                            {{ session('product_type_success') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Product Type List</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai tipe produk yang ada di
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <div class='d-flex justify-content-between'>
                        @livewire('product-type-add', ['warehouse' => $warehouse])
                        <a href="{{ route('producttype.edit', $warehouse->code) }}" class="text-warning mb-3">Edit Product
                            Type</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    @livewire('product-type-table', ['producttypes' => $warehouse->productTypes, 'warehouse' => $warehouse])
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
