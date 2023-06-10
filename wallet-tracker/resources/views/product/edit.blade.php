@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Product List</h4>
                            <p class="mb-0">Halaman ini memberikan kemudahan untuk merubah informasi produk yang ada di
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <a href="{{ route('product.index', $warehouse->code) }}" class="btn btn-success mb-3">Back to Products
                        Page (Auto Save)</a>
                    @livewire('product-table-edit', ['producttypes' => $producttypes, 'warehouse' => $warehouse])
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
