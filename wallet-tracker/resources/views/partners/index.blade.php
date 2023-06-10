@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('inv_error'))
                        <div class="alert alert-danger">
                            {{ session('inv_error') }}
                        </div>
                    @endif

                    @if (session()->has('inv_success'))
                        <div class="alert alert-success">
                            {{ session('inv_success') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Partner List</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai partner-partner yang terhubung dengan
                                warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-3 d-flex justify-content-between align-items-center">
                    @livewire('partner-add', ['warehouse' => $warehouse], key('partner-' . $warehouse->id))
                    <a href="{{ route('partner.edit', $warehouse->code) }}" class="text-warning">Edit Partner List</a>
                </div>

                <div class="col-lg-12">
                    @livewire('partner-table', ['warehouse' => $warehouse])
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
