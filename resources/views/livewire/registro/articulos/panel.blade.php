<div wire:ignore.self id="panelProduct" class="modal modal-slide-over" data-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
         <a data-dismiss="modal" href="javascript:;">
            <i class="fas fa-times fa-2x w-8 h-8 text-gray-500"></i>
        </a>
            <div class="modal-header p-5">
                <h2 class="font-medium text-base mr-auto">Editar artículos</h2>

                <x-save class="mt-4 mr-5" />

            </div>
            <div class="modal-body mr-5">

                <div class="">
                    <div class="input-group">
                        <div class="input-group-text">Nombre</div>
                        <input wire:model="name" id="name" type="text" class="form-control form-control-lg kioskboard" placeholder="Ejemplo: Coca Cola">
                    </div>
                    @error('name')
                    <x-alert msg="{{ $message }}" />
                    @enderror
                </div>
                <div class="mt-4">
                    <div class="sm:grid grid-cols-2 gap-2">
                        <div class="input-group">
                            <div class="input-group-text">Costo</div>
                            <input wire:model="cost" id="cost" type="number" class="form-control form-control-lg kioskboard" data-kioskboard-type="numpad" placeholder="Ejemplo: 100.00">
                        </div>
                        <div class="input-group">
                            <div class="input-group-text">Código</div>
                            <input wire:model="code" id="code" type="text" class="form-control form-control-lg kioskboard" placeholder="Ejemplo: 750100">
                        </div>
                        @error('cost')
                        <x-alert msg="{{ $message }}" /> @enderror
                    </div>
                    @error('code') <span class="text-theme-6">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <div class="input-group">
                        <div class="input-group-text">Precio 1</div>
                        <input wire:model="price" id="price" type="number" class="form-control form-control-lg kioskboard" data-kioskboard-type="numpad" placeholder="Ejemplo: 150.00">
                    </div>
                    @error('price')
                    <x-alert msg="{{ $message }}" /> @enderror
                </div>
                <div class="mt-4">
                    <div class="input-group">
                        <div class="input-group-text">Precio 2</div>
                        <input wire:model="price2" id="price2" type="number" class="form-control form-control-lg kioskboard" data-kioskboard-type="numpad" placeholder="Ejemplo: 139.00">
                    </div>
                    @error('price2')
                    <x-alert msg="{{ $message }}" /> @enderror
                </div>

                <div class="mt-4">
                    <div class="sm:grid grid-cols-2 gap-2">
                        <div class="input-group">
                            <div class="input-group-text">Stock</div>
                            <input wire:model="stock" id="stock" type="number" class="form-control form-control-lg kioskboard" data-kioskboard-type="numpad" placeholder="Ejemplo: 500">
                        </div>
                        <div class="input-group">
                            <div class="input-group-text">Mínimos</div>
                            <input wire:model="minstock" id="minstock" type="number" class="form-control form-control-lg kioskboard" data-kioskboard-type="numpad" placeholder="Ejemplo: 10">
                        </div>
                        @error('stock')
                        <x-alert msg="{{ $message }}" /> @enderror
                    </div>
                    @error('minstock')
                    <x-alert msg="{{ $message }}" /> @enderror
                </div>

                <div class="mt-4">
                    <div class="input-group">
                        <div class="input-group-text">Família</div>
                        <select wire:model.defer="category" class="form-select form-select-lg sm:mr-2">
                            <option value="elegir">Elegir</option>
                        </select>
                    </div>
                    @error('category')
                    <x-alert msg="{{ $message }}" /> @enderror
                </div>

                <div class="mt-3"> <label>Mostrar artículo</label>
                    <div class="mt-2">
                        <div class="form-check"> <input id="checkbox-switch-7"
                                class="form-check-switch" type="checkbox">
                            <label class="form-check-label"
                                for="checkbox-switch-7">Mostrar / Ocultar</label>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="grid grid-flow-col auto-cols-max md:auto-cols-min gap-2">
                        <div>
                            <label>Imágenes</label>
                            <input type="file" class="form-control" wire:model.defer="gallery" accept="image/x-png,image/jpeg" multiple>
                            @error('gallery.*')
                            <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Loading Message for Images -->
                        <div wire:loading wire:target="gallery">Subiendo Imagenes...</div>
                    </div>
                    @if( !empty( $gallery ) )
                    <div class=" sm:grid-cols-12 md:grid-cols-2 grid grid-cols-3 gap-2 pt-2 overflow-y-auto ">
                        @foreach ( $gallery as $photo )
                        <div>
                            <img class="rounded-lg" src="{{ $photo->temporaryUrl() }}">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
