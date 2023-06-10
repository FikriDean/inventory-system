<div>
    <div class="table-responsive rounded mb-3">
        <table class="data-tables table mb-0 tbl-server-info">
            <thead class="bg-white text-uppercase">
                <tr class="ligth ligth-data">
                    <th>List Products</th>
                    <th>Book Number</th>
                    <th>Products Price</th>
                    <th>Products Weight</th>
                    <th>Promo</th>
                    <th>Tax</th>
                    <th>Total</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tbody class="ligth-body">
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            <a
                                href="{{ route('order.show', ['code' => $order->warehouse->code, 'book' => $order->book]) }}">List
                                Products</a>
                        </td>
                        <td>
                            {{ $order->book }}
                        </td>
                        <td>
                            {{ $order->product_total }}
                        </td>
                        <td>
                            {{ $order->weight_total_kg }}
                        </td>
                        <td>
                            {{ $order->promo }}
                        </td>
                        <td>
                            {{ $order->tax }}
                        </td>
                        <td>
                            {{ $order->final_total }}
                        </td>
                        <td>
                            @if ($order->confirmation == 0)
                                @livewire('transaction-create', ['order' => $order], key('transaction-' . $order->id))
                            @else
                                <a href="{{ route('transaction.index', $order->warehouse->code) }}">Transaction Info</a>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
