<div>
    <button data-toggle="modal" data-target="#addPartner" class="btn btn-primary add-list">
        <i class="las la-plus mr-3"></i>Invite Partner
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addPartner" tabindex="-1" aria-labelledby="addPartnerLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Invite Partner</h5>
                    <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('username') text-danger @enderror">Username</span>
                            </div>
                            <input type="text" class="form-control @error('username') text-danger @enderror"
                                placeholder="Username..." wire:model='username'>

                        </div>

                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('role') text-danger @enderror">Role</span>
                            </div>
                            <select class="form-control @error('role') text-danger @enderror" wire:model='role'>
                                <option value=0>Choose one...</option>

                                @if ($roles)
                                    @foreach ($roles as $role)
                                        <option value={{ $role->id }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                @endif

                            </select>
                        </div>

                        @error('role')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='addPartner'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
