@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Product List</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai produk-produk yang ada di
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <div class='d-flex justify-content-between'>
                        @livewire('product-add', ['producttypes' => $producttypes, 'warehouse' => $warehouse])
                        <a href="{{ route('product.edit', $warehouse->code) }}" class="text-warning mb-3">Edit Products</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    @livewire('product-table', ['producttypes' => $producttypes, 'warehouse' => $warehouse])
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
