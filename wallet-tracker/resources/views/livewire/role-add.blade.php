<div>
    <button data-toggle="modal" data-target="#addRole" class="btn btn-primary add-list">
        <i class="las la-plus mr-3"></i>Add Role
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addRole" tabindex="-1" aria-labelledby="addRoleLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add New Role</h5>
                    <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('name') text-danger @enderror">Role Name</span>
                            </div>
                            <input type="text" class="form-control @error('name') text-danger @enderror"
                                placeholder="Role name..." wire:model='name'>

                        </div>

                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('salary') text-danger @enderror">Role Salary</span>
                            </div>
                            <input type="number" class="form-control @error('salary') text-danger @enderror"
                                placeholder="Role salary..." wire:model='salary'>
                        </div>

                        @error('salary')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text @error('level') text-danger @enderror">Role level</span>
                            </div>
                            <input type="number" class="form-control @error('level') text-danger @enderror"
                                placeholder="Role level..." wire:model='level'>
                        </div>

                        @error('level')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='addRole'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
