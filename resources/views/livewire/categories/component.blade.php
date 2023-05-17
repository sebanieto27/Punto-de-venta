<div>
    @if (!$form)
        <div class='intro-y col-span-12'>
            <div class="intro-y box">
                <h2 class="text-lg font-medium text-center text-theme-1 py-4">
                    Categorías
                </h2>
                <x-search />
                <div class="p-5">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-theme-1">
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" width="10%"></th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" width="70%">
                                            Descripción </th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr class="dark:bg-dark-1 {{ $loop->index % 2 > 0 ? 'bg-gray-200' : '' }}">
                                            <td>
                                                <img src="{{ $category->img }}" data-action="zoom"
                                                    alt="{{ $category->name }}" width="100">
                                            </td>
                                            <td class="dark:border-dark5">
                                                <h6 class="mb-1 font-medium">{{ $category->name }}</h6>
                                                <small class="font-normal">{{ $category->products->count() }}
                                                    productos</small>
                                            </td>
                                            <td class="dark:border-dark-5 text-center">
                                                <div class="d-flex justify-content-center">
                                                    @if ($category->products->count() < 1)
                                                        <button
                                                            onclick="destroy('categories','Destroy',{{ $category->id }})"
                                                            type="button"
                                                            class="btn btn-outline-danger w-32 inline-block mr-2 mb-2"><i
                                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                                                            Eliminar</button>
                                                    @endif
                                                    <button wire:click.prevent="Edit({{ $category->id }})"
                                                        type="button"
                                                        class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2"><i
                                                            data-feather="check-square" class="w-4 h-4 mr-1"></i>
                                                        Editar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="bg-gray-200 dark:bg-dark-1">
                                            <td colspan="3">
                                                <h6 class="text-center">No hay categorías registradas</h6>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 p-5">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    @else
        @include('livewire.categories.form')
    @endif
    @include('livewire.sales.keyboard')
    <script>
        const inputSearch = document.getElementById('search')
        inputSearch.addEventListener('change', (e) => {
            @this.search = e.target.value

        })
    </script>
</div>
