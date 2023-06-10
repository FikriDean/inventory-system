<div>
    <button data-toggle="modal" data-target="#choosePayment-{{ $order->book }}" class="btn-sm btn-primary border-0">
        Choose Payment
    </button>

    <!-- Modal -->
    <div class="modal fade" id="choosePayment-{{ $order->book }}" tabindex="-1"
        aria-labelledby="choosePaymentLabel-{{ $order->book }}" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Choose Payment</h5>
                    <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Method</span>
                        </div>

                        <select class="custom-select" wire:model='method' wire:change='updateChooseMethod'>
                            <option selected value=0>Choose Payment Method</option>

                            @if ($methods)
                                @foreach ($methods as $method)
                                    <option value={{ $method->id }}>{{ $method->type }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    @error('method')
                        <span class="text-center">{{ $message }}</span>
                    @enderror

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Account</span>
                        </div>

                        <select class="custom-select" wire:model='account'>
                            <option selected value=0>Choose Payment Account</option>

                            @if ($accounts)
                                @foreach ($accounts as $account)
                                    <option value={{ $account->id }}>{{ $account->app }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    @error('account')
                        <span class="text-center">{{ $message }}</span>
                    @enderror

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text @error('name') text-danger @enderror">Name</span>
                        </div>
                        <input type="text" class="form-control @error('name') text-danger @enderror"
                            placeholder="Behalf for.." wire:model='name'>

                    </div>

                    @error('name')
                        <span class="text-center">{{ $message }}</span>
                    @enderror

                    <div class="input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text @error('number') text-danger @enderror">Number</span>
                        </div>
                        <input type="number" class="form-control @error('number') text-danger @enderror"
                            placeholder="Your Account Number" wire:model='number'>

                    </div>

                    @error('number')
                        <span class="text-center">{{ $message }}</span>
                    @enderror

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='createTransaction'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
