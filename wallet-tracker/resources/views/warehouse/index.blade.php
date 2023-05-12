@extends('layouts.main')

@section('content-page')
				<div class="content-page">
								<div class="row">
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
																																<span class="bg-info iq-progress progress-1" data-percent="85"></span>
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
																																<span class="bg-info iq-progress progress-1" data-percent="85"></span>
																												</div>
																								</div>
																				</div>
																</a>
												</div>
												<div class="col-lg-3 col-md-3">
																<div class="card card-block card-stretch card-height">
																				<div class="card-body">
																								<div class="d-flex align-items-center mb-4 card-total-sale">
																												<div class="icon iq-icon-box-2 bg-success-light">
																																<img src="{{ asset('images/product/3.png') }}" class="img-fluid" alt="image">
																												</div>
																												<div>
																																<p class="mb-2">Available Accounts</p>
																																<h4>{{ $warehouse->accounts->count() }}</h4>
																												</div>
																								</div>
																								<div class="iq-progress-bar mt-2">
																												<span class="bg-success iq-progress progress-1" data-percent="75"></span>
																								</div>
																				</div>
																</div>
												</div>
												<div class="col-lg-3 col-md-3">
																<div class="card card-block card-stretch card-height">
																				<div class="card-body">
																								<div class="d-flex align-items-center mb-4 card-total-sale">
																												<div class="icon iq-icon-box-2 bg-secondary-light">
																																<img src="{{ asset('images/product/1.png') }}" class="img-fluid" alt="image">
																												</div>
																												<div>
																																<p class="mb-2">Available Methods</p>
																																<h4>{{ $warehouse->methods->count() }}</h4>
																												</div>
																								</div>
																								<div class="iq-progress-bar mt-2">
																												<span class="bg-success iq-progress progress-1" data-percent="75"></span>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</div>
@endsection
