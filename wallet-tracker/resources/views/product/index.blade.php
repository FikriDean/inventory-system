@extends('layouts.main')

@section('content-page')
				<div class="content-page">
								<div class="container-fluid">
												<div class="row">
																<div class="col-lg-12">
																				<div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
																								<div>
																												<h4 class="mb-3">Product List</h4>
																												<p class="mb-0">Halaman ini memberikan informasi mengenai partner-partner yang terhubung dengan
																																warehouse "<span class="fw-bolder">{{ $warehouse->name }}</span>"</p>
																								</div>

																								@livewire('product-add', ['producttypes' => $producttypes])

																				</div>
																</div>

																<div class="col-lg-12">
																				<input type='button' class="btn-sm btn-warning text-dark border-0 mb-3" id="edit_table" value="Edit">
																				@livewire('product-table', ['producttypes' => $producttypes, 'warehouse' => $warehouse])
																</div>
												</div>
												<!-- Page end  -->
								</div>
				</div>
@endsection

@section('custom_javascript')
				<script>
								$(document).ready(function() {
												$('.info-text').removeClass('display-none');
												$('.info-edit').addClass('display-none');

												$('#edit_table').on('click', function() {
																if ($('.info-text').hasClass('display-none')) {
																				document.querySelector('#edit_table').value = 'Edit';

																				$('.info-text').addClass('display-show');
																				$('.info-text').removeClass('display-none');
																				$('.info-edit').addClass('display-none');
																				$('.info-edit').removeClass('display-show');
																} else {
																				document.querySelector('#edit_table').value = 'Lock';

																				$('.info-edit').addClass('display-show');
																				$('.info-edit').removeClass('display-none');
																				$('.info-text').addClass('display-none');
																				$('.info-text').removeClass('display-show');
																}
												})
								});
				</script>
@endsection
