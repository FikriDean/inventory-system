<div>
    <div class="table-responsive rounded mb-3">
        <table class="table mb-0 tbl-server-info">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>Name</th>
                    <th>Code</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                <tr>
                    <td>
                        <div class="d-flex flex-column gap-2">
                            <input
                                class="limit-width-300 info-edit border-1 border-primary @error('name') text-danger border-danger @enderror rounded"
                                type="text" wire:model='name' wire:keyup='updateWarehouse'>

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <span class="display-none">{{ $name }}</span>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-2">
                            {{ $warehouse->code }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column gap-2">
                            <input
                                class="limit-width-300 info-edit border-1 border-primary @error('level') text-danger border-danger @enderror rounded"
                                type="number" wire:model='level' wire:keyup='updateWarehouse'>

                            @error('level')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <span class="display-none">{{ $level }}</span>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
