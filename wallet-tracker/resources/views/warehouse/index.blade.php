@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="row mb-3">
            <div class="col-lg-12">
                Warehouse Detail:
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Name
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{{ $warehouse->name }}</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Code
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{{ $warehouse->code }}</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <div class="card-header">
                        Base Level
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{{ $warehouse->level }}</h6>
                    </div>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="card">
                    <div class="card-header">
                        Edit Warehouse
                    </div>
                    <div class="card-body">
                        <a href="{{ route('warehouse.edit', $warehouse->code) }}"
                            class="btn-sm btn-warning w-100 d-block text-center border-none">Edit Warehouse</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <div class="card-header">
                        Delete Warehouse
                    </div>
                    <div class="card-body">
                        @livewire('warehouse-delete', ['warehouse' => $warehouse], key('delete-' . $warehouse->id))
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12">
                Warehouse Products Management:
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3">
                <a href="{{ route('role.index', $warehouse->code) }}">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-success-light">
                                    <img src="{{ asset('images/product/3.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Roles</p>
                                    <h4>{{ $rolesCount }}</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-success iq-progress progress-1" data-percent="100"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3">
                <a href="{{ route('partner.index', $warehouse->code) }}">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-info-light">
                                    <img src="{{ asset('images/product/1.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Partners</p>
                                    <h4>{{ $usersCount }}</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-info iq-progress progress-1" data-percent="100"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3">
                <a href="{{ route('product.index', $warehouse->code) }}">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-info-light">
                                    <img src="{{ asset('images/product/2.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Product Types</p>
                                    <h4>{{ $warehouse->productTypes->count() }}</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-info iq-progress progress-1" data-percent="100"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3">
                <a href="{{ route('product.index', $warehouse->code) }}">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-info-light">
                                    <img src="{{ asset('images/product/2.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Products</p>
                                    <h4>{{ $productsCount }}</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-info iq-progress progress-1" data-percent="100"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12">
                Warehouse Orders Management:
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3">
                <a href="{{ route('order.index', $warehouse->code) }}">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-secondary-light">
                                    <img src="{{ asset('images/product/1.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Orders</p>
                                    <h4>{{ $warehouse->orders->count() }}</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-success iq-progress progress-1" data-percent="100"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
@endsection
