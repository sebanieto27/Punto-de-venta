    <div>
        @if(!$form)
        <div class="intro-y col-span-12">
            <div class="intro-y box">
                <h2 class="text-lg font-medium text-center text-theme-1 py-4">
                    Puestos de venta
                </h2>
                <x-search />

                <div class="p-5" id="striped-rows-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-theme-1">
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap ">Nombre</th>
                                        <!--<th class="border-b-2 dark:border-dark-5 whitespace-nowrap ">Calle</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap ">Barrio</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap ">Ciudad</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap ">Estado</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap ">C.P.</th>-->
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center"> Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($customers as $customer)
                                    <tr class="dark:bg-dark-1 font-medium {{$loop->index % 2 >0 ? 'bg-gray-200' : '' }}">

                                        <td class="dark:border-dark-5">
                                            {{ $customer->name }}
                                        </td>
                                        <!--
                                        <td class="dark:border-dark-5">
                                            {{ $customer->street }}
                                        </td>
                                        <td class="dark:border-dark-5">
                                            {{ $customer->colony }}
                                        </td>
                                        <td class="dark:border-dark-5">
                                            {{ $customer->city }}
                                        </td>
                                        <td class="dark:border-dark-5">
                                            {{ $customer->state }}
                                        </td>
                                        <td class="dark:border-dark-5">
                                            {{ $customer->zipcode }}
                                        </td>-->

                                        <td class="dark:border-dark-5 text-center">
                                            <div class="flex justify-end items-center">
                                                @if( $customer->orders->count() < 1) <button onclick="destroy('customers','Destroy',{{ $customer->id}})" type="button" class="btn btn-outline-danger w-32 inline-block mr-2 mb-2"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Eliminar</button>
                                                    @endif
                                                    <button wire:click.prevent="Edit({{$customer->id}})" type="button" class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2"><i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="bg-gray-200 dark:bg-dark-1">
                                        <td colspan="2">
                                            <h6 class="text-center">NO HAY CLIENTES</h6>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 p-5">
                    {{$customers->links()}}
                </div>
            </div>
        </div>


        @else
        @include('livewire.customers.form')
    </div>
    @endif

    @include('livewire.sales.keyboard')


    <script>
        document.addEventListener('click', (e) => {

            if (e.target.id == 'search') {

                KioskBoard.run('#search', {})

                document.getElementById('search').blur()
                document.getElementById('search').focus()

                const inputSearch = document.getElementById('search')
                inputSearch.addEventListener('change', (e) => {
                    @this.search = e.target.value
                })
            }
        })
    </script>

    </div>
