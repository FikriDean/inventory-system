@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('edit_success'))
                        <div class="alert alert-success">
                            {{ session('edit_success') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Product Type List</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai tipe produk yang terhubung dengan
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    @livewire('product-type-edit-table', ['warehouse' => $warehouse])
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
