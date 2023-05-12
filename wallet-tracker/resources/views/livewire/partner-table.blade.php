<div>
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
																@foreach ($users as $user)
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
