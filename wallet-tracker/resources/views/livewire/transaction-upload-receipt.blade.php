<div>
    @if ($transaction->image)
        <button class="border-0" data-toggle="modal" data-target="#uploadReceipt" >
            <img src="{{ asset('user/' . $transaction->image) }}" alt="{{ $transaction->order->book }}"
                class="limit-width-100">
        </button>
    @else
        <button data-toggle="modal" data-target="#uploadReceipt" class="btn-sm btn-primary border-none">
            Upload Receipt
        </button>
    @endif


    <!-- Modal -->
    <div class="modal fade" id="uploadReceipt" tabindex="-1" aria-labelledby="uploadReceiptLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <form
                    action="{{ route('transaction.receipt', ['code' => $warehouse->code, 'book' => $transaction->order->book]) }}"
                    method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('POST')

                    <div class="modal-header">
                        <h5>Upload Payment Receipt</h5>
                        <button class="btn" type="button" data-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Receipt</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input mb-3" name="image"
                                    onchange="loadFile(event)">
                                <label class="custom-file-label">Choose file</label>
                                <img id="output" class="limit-width-300" @if ($transaction->image) src='{{ asset('user/' . $transaction->image) }}' @endif/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            aria-label="Close">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('custom_javascript')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
