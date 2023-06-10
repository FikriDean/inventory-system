@php
    use App\Models\Method;
    use App\Models\Account;
@endphp

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

            <div class="row">
                <div class="col-lg-12">
                    <div class="nav nav-tabs d-flex justify-content-around">
                        <div><a class="px-5" data-toggle="tab" href="#menu1">Type</a></div>
                        <div><a class="px-5" data-toggle="tab" href="#menu2">Code</a></div>
                        <div><a class="px-5" data-toggle="tab" href="#menu3">Payment</a></div>
                        <div><a class="px-5" data-toggle="tab" href="#menu4">Customer</a></div>
                        <div><a class="px-5" data-toggle="tab" href="#menu5">Receipt</a></div>
                        <div><a class="px-5" data-toggle="tab" href="#menu6">Status</a></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <h3>Transaction Type</h3>
                            <p>{{ $transaction->transactiontype->type }}</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Order Code</h3>
                            <p>{{ $transaction->order->book }}</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Payment Info</h3>
                            <h6 style="font-weight: 400">
                                {{ Method::where('id', $transaction->account_method->method_id)->first()->type }}
                            </h6>
                            <h6 style="font-weight: 400">
                                {{ Account::where('id', $transaction->account_method->account_id)->first()->app }}
                            </h6>
                            <h6 style="font-weight: 400">
                                {{ Account::where('id', $transaction->account_method->account_id)->first()->number }}
                            </h6>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <h3>Customer Info</h3>
                            <h6 style="font-weight: 400">
                                {{ $transaction->transaction_name }}
                            </h6>
                            <h6 style="font-weight: 400">
                                {{ $transaction->transaction_number }}
                            </h6>
                        </div>
                        <div id="menu5" class="tab-pane fade">
                            <h3>Upload Receipt</h3>
                            @livewire('transaction-upload-receipt', ['warehouse' => $warehouse, 'transaction' => $transaction], key('upload-receipt-' . $transaction->id))

                        </div>
                        <div id="menu6" class="tab-pane fade">
                            <h3>Transaction Status</h3>
                            @livewire('transaction-change-status', ['transaction' => $transaction], key('change-status' . $transaction->id))

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    </div>
@endsection

@section('custom_javascript')
@endsection
