<div>
				@if (session()->has('partner_deleted'))
								<div class="alert alert-success alert-dismissable fade show d-flex justify-content-between align-items-center">
												<strong>{{ session('partner_deleted') }}</strong>
												<a class="close text-dark c-pointer" data-dismiss="alert" aria-label="close">
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
																				viewBox="0 0 16 16">
																				<path
																								d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
																</svg>
												</a>
								</div>
				@endif

				<div class="table-responsive rounded mb-3">
								<table class="data-tables table mb-0 tbl-server-info">
												<thead class="bg-white text-uppercase">
																<tr class="ligth ligth-data">
																				<th>Profile</th>
																				<th>Name</th>
																				<th>Email</th>
																				<th>Phone Number</th>
																				<th>Role</th>
																				<th>Action</th>
																</tr>
												</thead>
												<tbody class="ligth-body">
																@foreach ($usersInWarehouse as $user)
																				<tr>
																								<td>
																												<img src="{{ asset($user->image) }}" class="rounded avatar-40 img-fluid"
																																alt="{{ $user->username }}">
																								</td>
																								<td>{{ $user->name }}</td>
																								<td>{{ $user->email }}</td>
																								<td>{{ $user->phone_number }}</td>
																								<td>
																												@livewire('partner-edit-role', ['user' => $user], key($user->id))
																								</td>
																								<td>
																												<div class="d-flex align-items-center list-action">
																																<div>
																																				<a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top"
																																								title="View Profile" data-original-title="View"
																																								href="{{ route('profile.index', $user->username) }}">
																																								<i class="ri-eye-line mr-0"></i>
																																				</a>
																																</div>

																																@livewire('partner-delete', ['user' => $user, 'warehouse' => $warehouse], key('delete-' . $user->id))
																												</div>
																								</td>
																				</tr>
																@endforeach
												</tbody>
								</table>
				</div>
</div>
