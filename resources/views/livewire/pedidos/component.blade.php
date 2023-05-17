<div>
    @if(!$form)
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <button class="btn btn-primary shadow-md mr-2"></i> Agregar nueva órden</button>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-gray-600 text-lg">Mostrando últimas órdenes</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                        <input type="text" class="form-control w-56 box pr-10 placeholder-theme-13" placeholder="Buscar órden">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">Imagenes</th>
                            <th class="whitespace-nowrap">Pedido</th>
                            <th class="text-center whitespace-nowrap">Cantidad de ítems</th>
                            <th class="text-center whitespace-nowrap">Estado</th>
                            <th class="text-center whitespace-nowrap">Cambiar estado</th>
                            <th class="text-center whitespace-nowrap">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        @foreach ($order->details as $detail)
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{asset ($detail->product->img)}}" title="{{($detail->product->name)}}">
                                            </div>
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">Número {{ $order->id }}</a>
                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Cargado por {{ $order->customer->name }}</div>
                                </td>
                                <td class="text-center">{{ $order->items }}</td>
                                <td class="w-40">
                                    @if ($order->status == "Pendiente")
                                            <div class="flex items-center justify-center text-theme-11">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $order->status }}
                                            </div>
                                    @endif
                                    @if ($order->status == "Entregada")
                                            <div class="flex items-center justify-center text-theme-9">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $order->status }}
                                            </div>
                                    @endif
                                    @if ($order->status == "Cerrada")
                                            <div class="flex items-center justify-center text-theme-8">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $order->status }}
                                            </div>
                                    @endif
                                    @if ($order->status == "Cancelada")
                                            <div class="flex items-center justify-center text-theme-6">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $order->status }}
                                            </div>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('pedidoPendiente', ['order' => $order->id])}}" type="button" class="btn btn-rounded btn-warning-soft w-24 mr-1 mb-2">Pendiente</a>
                                    <a href="{{ route('pedidoEntregada', ['order' => $order->id])}}" type="button" class="btn btn-rounded btn-success-soft w-24 mr-1 mb-2">Entregada</a>
                                    <a href="{{ route('pedidoCerrada', ['order' => $order->id])}}" type="button" class="btn btn-rounded btn-secondary-soft w-24 mr-1 mb-2">Cerrada</a>
                                    <a href="{{ route('pedidoCancelada', ['order' => $order->id])}}" type="button" class="btn btn-rounded btn-danger-soft w-24 mr-1 mb-2">Cancelada</a>
                                </td>
                                <td class="dark:border-dark-5 text-center">
                                    <div class="d-flex justify-content-center">
                                        <!--<button class="btn btn-warning text-white border-0 ml-3" wire:click.prevent="editarPedido" type="button">
                                            <i class="fas fa-edit fa-2x"></i>
                                        </button>-->
                                        <button wire:click.prevent="viewDetails({{ $order->id }})" type="button" class="btn btn-secondary-soft w-32 inline-block mr-1 mb-2"> <i class="fas fa-eye fa-1x mr-1"></i>Ver orden</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <div class="col-span-12 p-5">
                @if(count($orders) > 0)
                {{$orders->links()}}
                @endif
            </div>
            <!-- END: Pagination -->
        </div>
    @else
    @include('livewire.pedidos.form')
    @endif

    @include('livewire.reports.detail')

    <script>
        function closeModalUser() {
        var modal = document.getElementById("modalUser")
        modal.classList.remove("overflow-y-auto", "show")
        modal.style.cssText = ""
        }

        function openModalDetail() {
            var modal = document.getElementById("modalDetail")
            modal.classList.add("overflow-y-auto", "show")
            modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 1000;"
        }

        function closeModalDetail() {
            var modal = document.getElementById("modalDetail")
            modal.classList.remove("overflow-y-auto", "show")
            modal.style.cssText = ""
        }
        window.addEventListener('open-modal-detail', event => {
            openModalDetail()
        })

        window.addEventListener('close-modal-user', event => {
            closeModalUser()
        })
    </script>
</div>
