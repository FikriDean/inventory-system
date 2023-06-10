@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('transaction_success'))
                        <div class="alert alert-success">
                            {{ session('transaction_success') }}
                        </div>
                    @endif
                    @if (session()->has('transaction_failed'))
                        <div class="alert alert-danger">
                            {{ session('transaction_failed') }}
                        </div>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Transaction List</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai order yang ada di
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                @livewire('transaction-table', ['warehouse' => $warehouse, 'transactions' => $transactions])
            </div>
        </div>
        <!-- Page end  -->
    </div>
    </div>
@endsection
