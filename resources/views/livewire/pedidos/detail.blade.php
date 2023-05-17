<div wire:ignore.self id="modalDetail" class="modal" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                    <b class="text-theme-1">Detalles de orden | #{{ $details[0]->order->id ?? 0}}</b>
                </h2>
            </div>

            <div class="modal-body grid gap-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="p-5" id="striped-rows-table">
                            <div class="preview">
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <thead>
                                            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap font-bold text-left">Producto</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap font-bold text-center">Precio</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap font-bold text-center">Cantidad</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap font-bold text-center">Importe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($details as $detail)
                                            <tr class="dark:bg-dark-1 text-md {{$loop->index % 2 > 0 ? 'bg-gray-200' : ''}}">
                                                <td class="border-b dark:border-dark-5 text-left">
                                                    {{$detail->product->name}}
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-right">
                                                    ${{ number_format($detail->price,2) }}
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-right">
                                                    {{ number_format($detail->quantity,0) }}
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-right">
                                                    ${{ number_format($detail->price * $detail->quantity,2) }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO HAY DETALLES REGISTRADOS</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th class="bg-gray-700 dark:bg-dark-1 text-white">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="hover:bg-gray-200 text-lg">
                                                <td class="border text-right">${{$total}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer text-right">
                <button onclick="closeModalDetail()" class="btn btn-outline-secondary mr-5">Cerrar Ventana</button>
            </div>

        </div>
    </div>
</div>
