<div>
    <div class="table-responsive rounded mb-3">
        <table class="table mb-0 tbl-server-info" id="products-table">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>No.</th>
                    <th>From</th>
                    <th>Warehouse</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                @foreach ($invitations as $invitation)
                <tr>
                    <td>
                        @isset ($loop->iteration)
                            {{ $loop->iteration }}
                        @endisset
                    </td>
                    <td>
                        {{ $invitation->from }}
                    </td>
                    <td>
                        {{ $invitation->role->warehouse->name }}
                    </td>
                    <td>
                        {{ $invitation->role->name }}
                    </td>
                    <td>
                        <button class="btn-sm btn-success border-0" wire:click='determination("accept", {{ $invitation }})'>Accept</button>
                        <button class="btn-sm btn-danger border-0" wire:click='determination("reject", {{ $invitation }})'>Reject</button>
                    </td>
                </tr>
                @endforeach
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

            // window.addEventListener('update-items', () => {
            //     window.location.reload(true);
            // })
        });
    </script>
@endsection