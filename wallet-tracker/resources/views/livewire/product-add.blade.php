<div>
    <button data-toggle="modal" data-target="#addProduct" class="btn btn-primary add-list">
        <i class="las la-plus mr-3"></i>Add Product
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Tambah Produk</h5>
                    <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Type</label>
                            </div>

                            <select class="form-control" wire:model='type'>
                                <option selected value=0>Choose one...</option>

                                @if ($producttypes)
                                    @foreach ($producttypes as $producttype)
                                        <option value={{ $producttype->id }}>{{ $producttype->name }}
                                        </option>
                                    @endforeach
                                @endif

                            </select>
                        </div>

                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('name') text-danger @enderror">Name</span>
                            </div>
                            <input type="text" class="form-control @error('name') text-danger @enderror"
                                placeholder="Product name..." wire:model='name'>

                        </div>

                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('weight') text-danger @enderror">
                                    Weight</span>
                            </div>
                            <input type="number" class="form-control @error('weight') text-danger @enderror""
                                placeholder="Product weight..." wire:model='weight'>
                        </div>

                        @error('weight')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('price') text-danger @enderror">Price (K
                                    unit)</span>
                            </div>
                            <input type="number" class="form-control @error('price') text-danger @enderror"
                                placeholder="Product price..." wire:model='price'>
                        </div>

                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('stock') text-danger @enderror">Stock</span>
                            </div>
                            <input type="number" class="form-control @error('stock') text-danger @enderror"
                                placeholder="Product stock..." wire:model='stock'>
                        </div>

                        @error('stock')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='addProduct'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
