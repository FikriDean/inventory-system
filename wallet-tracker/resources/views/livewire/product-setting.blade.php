<div>
				<a class="badge badge-info mr-2 c-pointer" data-toggle="tooltip" data-placement="top" title="View Profile"
								data-original-title="View">
								<i class="ri-eye-line mr-0"></i>
				</a>

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-{{ $product->id }}">
								Launch demo modal
				</button>

				<!-- Modal -->
				<div class="modal fade" id="modal-{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
								aria-hidden="true">
								<div class="modal-dialog">
												<div class="modal-content">
																<div class="modal-header">
																				<h1 class="modal-title fs-5" id="modal-{{ $product->id }}-label">Modal title</h1>
																				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																				...
																</div>
																<div class="modal-footer">
																				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																				<button type="button" class="btn btn-primary">Save changes</button>
																</div>
												</div>
								</div>
				</div>
</div>
