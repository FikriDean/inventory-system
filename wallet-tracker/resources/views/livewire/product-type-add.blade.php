<div>
    <button data-toggle="modal" data-target="#addProductType" class="btn btn-primary add-list">
        <i class="las la-plus mr-3"></i>Add Product Type
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addProductType" tabindex="-1" aria-labelledby="addProductTypeLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add New Product Type</h5>
                    <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('name') text-danger @enderror">Product Type</span>
                            </div>
                            <input type="text" class="form-control @error('name') text-danger @enderror"
                                placeholder="Product Type..." wire:model='name'>

                        </div>

                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='addProductType'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
