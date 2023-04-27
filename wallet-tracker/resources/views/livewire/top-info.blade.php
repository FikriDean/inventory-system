<div>
				<div class="content-page">
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
												@foreach ($warehouses as $key => $warehouse)
																<div class="col-lg-4 col-md-4">
																				<a href="{{ route('warehouse.index', $warehouse->code) }}">
																								<div class="card card-block card-stretch card-height">
																												<div class="card-body">
																																<div class="d-flex align-items-center mb-4 card-total-sale">
																																				<div class="icon iq-icon-box-2 bg-info-light">
																																								<img src="{{ asset('images/product/1.png') }}" class="img-fluid" alt="image">
																																				</div>
																																				<div>
																																								<p class="mb-2">{{ $key += 1 }}</p>
																																								<h4>{{ $warehouse->name }}</h4>
																																				</div>
																																</div>
																																<div class="iq-progress-bar mt-2">
																																				<span class="bg-info iq-progress progress-1" data-percent="85"></span>
																																</div>
																												</div>
																								</div>
																				</a>
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
