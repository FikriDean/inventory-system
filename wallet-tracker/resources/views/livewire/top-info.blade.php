<div>
    <div class="content-page">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('create_success'))
                    <div class="alert alert-success">
                        {{ session('create_success') }}
                    </div>
                @endif

                @if (session()->has('delete_success'))
                    <div class="alert alert-success">
                        {{ session('delete_success') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <a href="{{ route('invitation.index', Auth::user()->username) }}">
                    <div class="card card-block card-stretch card-height bg-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-info-light">
                                    <img src="{{ asset('images/product/1.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <h4>Invitation</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p>
                                See all invitations
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12">
                <button data-toggle="modal" data-target="#createWarehouse" class="btn btn-primary add-list">
                    <i class="las la-plus mr-3"></i>Create Warehouse
                </button>

                <!-- Modal -->
                <div class="modal fade" id="createWarehouse" tabindex="-1" aria-labelledby="createWarehouseLabel"
                    aria-hidden="true" wire:ignore.self>
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Create New Warehouse</h5>
                                <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">

                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text @error('name') text-danger @enderror">Name</span>
                                        </div>
                                        <input type="text" class="form-control @error('name') text-danger @enderror"
                                            placeholder="Name..." wire:model='name'>

                                    </div>

                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="input-group mt-3">
                                        (For Authorization Purposes)
                                    </div>

                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text @error('level') text-danger @enderror">Base
                                                Level</span>
                                        </div>
                                        <input type="text" class="form-control @error('level') text-danger @enderror"
                                            placeholder="Level..." wire:model='level'>
                                    </div>

                                    @error('level')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    aria-label="Close">Close</button>
                                <button type="button" class="btn btn-primary"
                                    wire:click='createWarehouse'>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-transparent card-block card-stretch card-height border-none">
                    <div class="card-body p-0 mt-lg-2 mt-0">
                        <h3 class="mb-3">Halo, {{ $user->name }}</h3>
                        <p class="mb-0 mr-4">Warehouse manakah yang ingin kau kerjakan hari ini?</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($roles as $role)
                <div class="col-lg-4 col-md-4">
                    @isset($role->warehouse->code)
                        <a href="{{ route('warehouse.index', $role->warehouse->code) }}">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <div class="icon iq-icon-box-2 bg-info-light">
                                            <img src="{{ asset('images/product/1.png') }}" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <h4>{{ $role->warehouse->name }}</h4>
                                        </div>
                                    </div>
                                    <div class="iq-progress-bar mt-2">
                                        <span class="bg-info iq-progress progress-1" data-percent="85"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endisset

                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- 
@section('custom_javascript')
				<script>
								$(document).ready(function() {
												$('.formSubmit').on('click', function() {
																$(this).submit();
												});
								});
				</script>
@endsection --}}
