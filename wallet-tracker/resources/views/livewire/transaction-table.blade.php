@php
    use App\Models\Method;
    use App\Models\Account;
@endphp

<div>
    <div class="table-responsive rounded mb-3">
        <table class="data-tables  table mb-0 tbl-server-info">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>Transaction Type</th>
                    <th>Order Code</th>
                    <th>Payment Method</th>
                    <th>Customer Info</th>
                    <th>Payment Receipt</th>
                    <th>Status</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>
                            {{ $transaction->transactiontype->type }}
                        </td>
                        <td>
                            {{ $transaction->order->book }}
                        </td>
                        <td>
                            <h6 style="font-weight: 400">
                                {{ Method::where('id', $transaction->account_method->method_id)->first()->type }}
                            </h6>
                            <h6 style="font-weight: 400">
                                {{ Account::where('id', $transaction->account_method->account_id)->first()->app }}
                            </h6>
                            <h6 style="font-weight: 400">
                                {{ Account::where('id', $transaction->account_method->account_id)->first()->number }}
                            </h6>
                        </td>
                        <td>
                            <h6 style="font-weight: 400">
                                {{ $transaction->transaction_name }}
                            </h6>
                            <h6 style="font-weight: 400">
                                {{ $transaction->transaction_number }}
                            </h6>
                        </td>
                        <td>
                            @livewire('transaction-upload-receipt', ['warehouse' => $warehouse, 'transaction' => $transaction], key('upload-receipt-' . $transaction->id))
                        </td>
                        <td>
                            @livewire('transaction-change-status', ['transaction' => $transaction], key('change-status' . $transaction->id))
                        </td>
                        <td>
                            <a href="{{ route('transaction.show', ['code' => $warehouse->code, 'book' => $transaction->order->book]) }}">More Info</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
