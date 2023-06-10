@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Role list</h4>
                            <p class="mb-0">Halaman ini memberikan informasi mengenai role-role yang ada di
                                warehouse "
                                @isset($warehouse)
                                    <span class="fw-bolder">{{ $warehouse->name }}</span>
                                @endisset
                                "
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    @isset($roles)
                        @isset($warehouse)
                            @livewire('role-table-edit', ['roles' => $roles, 'warehouse' => $warehouse])
                        @endisset
                    @endisset
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
