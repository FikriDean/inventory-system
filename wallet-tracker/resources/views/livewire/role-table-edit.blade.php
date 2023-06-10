<div>
    @isset($warehouse)
        <a class="btn btn-success mb-3" href="{{ route('role.index', $warehouse->code) }}">Save (Auto Save)</a>
    @endisset

    <div class="table-responsive rounded mb-3">
        <table class="table mb-0 tbl-server-info" id="products-table">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>No.</th>
                    <th>Role Name</th>
                    <th>Salary (K)</th>
                    <th>Level</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                @isset($roles)
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                @isset($loop->iteration)
                                    {{ $loop->iteration }}
                                @endisset
                            </td>
                            <td>
                                <span>
                                    @isset($role)
                                        @livewire('role-edit-name', ['role' => $role], key('name- ' . $role->id))
                                    @endisset
                                </span>
                            </td>
                            <td>
                                <span>
                                    @isset($role)
                                        @livewire('role-edit-salary', ['role' => $role], key('salary- ' . $role->id))
                                    @endisset
                                </span>
                            </td>
                            <td>
                                <span>
                                    @isset($role)
                                        @livewire('role-edit-level', ['role' => $role], key('level- ' . $role->id))
                                    @endisset
                                </span>
                            </td>
                            <td>
                                @isset($role->updated_at)
                                    {{ date('Y-m-d', strtotime($role->updated_at)) }}
                                @endisset
                            </td>
                            <td>
                                <span>
                                    @isset($role)
                                        @livewire('role-delete', ['role' => $role, 'warehouse' => $warehouse], key('delete-' . $role->id))
                                    @endisset
                                </span>
                            </td>
                        </tr>
                    @endforeach
                @endisset

            </tbody>
        </table>
    </div>
</div>

@section('custom_javascript')
    <script>
        $(document).ready(function() {
            $('#products-table').DataTable({
                'paging': true,
                'searching': true,
            });
        });

        // $('.role-edit-field').hide();

        // let roleEditField = document.querySelector('.role-edit-field');
        // roleEditField.setAttribute('disabled', 'disabled');

        // $('#edit-control-button').on('click', function() {
        //     $('.role-edit-field').attr('disabled', function(index, attr) {
        //         return attr == null ? 'disabled' : null;
        //     });
        //     // $('.role-info-field').toggle();
        //     // $('.role-edit-field').toggle();
        // });
    </script>
@endsection
