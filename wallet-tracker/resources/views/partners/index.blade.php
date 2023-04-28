@extends('layouts.main')

@section('content-page')
				<div class="content-page">
								<div class="container-fluid">
												<div class="row">
																<div class="col-lg-12">
																				<div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
																								<div>
																												<h4 class="mb-3">Partner List</h4>
																												<p class="mb-0">Halaman ini memberikan informasi mengenai partner-partner yang terhubung dengan
																																warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
																								</div>
																								<a href="page-add-users.html" class="btn btn-primary add-list">
																												<i class="las la-plus mr-3"></i>Add Partner
																								</a>
																				</div>
																</div>

																<div class="col-lg-12">
																				@livewire('partner-table', ['usersInWarehouse' => $usersInWarehouse, 'warehouse' => $warehouse])
																</div>
												</div>
												<!-- Page end  -->
								</div>
				</div>
@endsection
