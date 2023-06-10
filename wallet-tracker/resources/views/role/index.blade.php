@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session()->has('role_added'))
                        <div class="alert alert-success">
                            {{ session('role_added') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Role list</h4>
                            <p class="mb-0">
                                Halaman ini memberikan informasi mengenai role-role yang ada di
                                warehouse "@isset($warehouse)
                                    <span class="fw-bolder">{{ $warehouse->name }}</span>
                                @endisset"
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 d-flex justify-content-between">
                    @livewire('role-add', ['roles' => $roles, 'warehouse' => $warehouse])
                    <a href="{{ route('role.edit', $warehouse->code) }}" class="text-warning">Edit Roles</a>
                </div>

                <div class="col-lg-12 mt-3">
                    @isset($warehouse)
                        @isset($roles)
                            @livewire('role-table', ['roles' => $roles, 'warehouse' => $warehouse])
                        @endisset
                    @endisset
                </div>

            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
