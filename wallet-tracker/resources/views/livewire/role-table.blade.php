<div>
    <div class="table-responsive rounded mb-3">
        <table class="table mb-0 tbl-server-info" id="products-table">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>No.</th>
                    <th>Role Name</th>
                    <th>Salary (K)</th>
                    <th>Level</th>
                    <th>Last Updated</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                @isset ($roles)
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                @isset ($loop->iteration)
                                    {{ $loop->iteration }}
                                @endisset
                            </td>
                            <td>
                                {{-- @isset ($role->name) --}}
                                    {{ $role->name }}
                                {{-- @endisset --}}
                            </td>
                            <td>
                                @isset ($role->salary)
                                    {{ $role->salary }}
                                @endisset
                            </td>
                            <td>
                                @isset($role->level)
                                    {{ $role->level }}
                                @endisset
                            </td>
                            <td>
                                @isset ($role->updated_at)
                                    {{ date('Y-m-d', strtotime($role->updated_at)) }}
                                @endisset
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
