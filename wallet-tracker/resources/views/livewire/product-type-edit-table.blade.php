<div>
    <div class="table-responsive rounded mb-3">
        <table class="data-tables table mb-0 tbl-server-info">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>No.</th>
                    <th>Name</th>
                    <th>Last Updated</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                @foreach ($producttypes as $producttype)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            @livewire('product-type-edit-name', ['producttype' => $producttype], key('name-' . $producttype->id))
                        </td>
                        <td>
                            {{ $producttype->updated_at->diffForHumans() }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
