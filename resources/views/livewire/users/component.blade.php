    <div>
        @if(!$form)
        <div class="intro-y col-span-12">
            <div class="intro-y box">
                <h2 class="text-lg font-medium text-center text-theme-1 py-4">
                    {{strtoupper($componentName)}}
                </h2>
                <x-search />

                <div class="p-5" id="striped-rows-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-theme-1">
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Nombre</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Email</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Roll</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center"> Actiones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                    <tr class="dark:bg-dark-1 font-medium {{$loop->index % 2 >0 ? 'bg-gray-200' : '' }}">

                                        <td class="dark:border-dark-5 text-center">
                                            {{ $user->name }}
                                        </td>
                                        <td class="dark:border-dark-5 text-center">
                                            {{ $user->email }}
                                        </td>
                                        <td class="dark:border-dark-5 text-center">
                                            {{ $user->profile }}
                                        </td>


                                        <td class="dark:border-dark-5 text-center">
                                            <div class="flex justify-end items-center">
                                                @if( $user->sales->count() < 1) <button onclick="destroy('users','Destroy',{{ $user->id}})" type="button" class="btn btn-outline-danger w-32 inline-block mr-2 mb-2"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Eliminar</button>
                                                    @endif
                                                    <button wire:click.prevent="Edit({{$user->id}})" type="button" class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2"><i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="bg-gray-200 dark:bg-dark-1">
                                        <td colspan="2">
                                            <h6 class="text-center">NO HAY USUARIOS</h6>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 p-5">
                    {{$users->links()}}
                </div>
            </div>
        </div>


        @else
        @include('livewire.users.form')
    </div>
    @endif

    @include('livewire.sales.keyboard')


    <script>
        const inputSearch = document.getElementById('search')
        inputSearch.addEventListener('change', (e) => {
            @this.search = e.target.value;
        })


        KioskBoard.run('.kioskboard', {});
    </script>

    </div>
