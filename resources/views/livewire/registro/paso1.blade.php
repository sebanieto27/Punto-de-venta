<div>

    <body class="main">
        <div class="flex">
            <div class="content">
                <!-- BEGIN: Wizard Layout -->
                <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="flex justify-center">
                        <div class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">1</div>
                        <div class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">2
                        </div>
                        <div class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">3
                        </div>
                        <div class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">4
                        </div>
                        <div class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">5
                        </div>
                        <div class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">6
                        </div>
                    </div>
                    <div class="px-5 mt-10">
                        <div class="font-medium text-center text-lg">Registro</div>
                        <div class="text-gray-600 text-center mt-2">Ingrese sus datos para la creación de la cuenta.
                        </div>
                    </div>

                    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
                        <form wire:submit.prevent="submit" class="validate-form">
                            <div class="grid grid-cols-3 gap-5">

                                <div class="input-form">
                                    <label class="form-label w-full flex flex-col sm:flex-row">
                                        Nombre
                                        <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input wire:model="name" type="text" name="name" class="form-control"
                                        placeholder="" minlength="2" required>
                                    @error('name')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-form">
                                    <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                        Apellido <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input id="validation-form-2" type="text" name="last_name" wire:model="last_name"
                                        class="form-control" placeholder="" minlength="2" required>
                                    @error('last_name')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form">
                                    <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row">
                                        NIF <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input wire:model="nif" type="text" name="nif" class="form-control"
                                        placeholder="" minlength="9" maxlength="9" required>
                                    @error('nif')
                                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form"> <label class="form-label w-full flex flex-col sm:flex-row">
                                        Nombre comercial <span
                                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="text" name="commercial_name" wire:model="commercial_name"
                                        class="form-control" placeholder="" minlength="2" required>
                                    @error('commercial_name')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form"> <label class="form-label w-full flex flex-col sm:flex-row">
                                        Dirección <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="text" name="address" wire:model="address" class="form-control"
                                        placeholder="" minlength="2" required>
                                    @error('address')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form">
                                    <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row">
                                        Altura <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input wire:model="number" type="text" name="number" class="form-control"
                                        placeholder="" minlength="9" maxlength="9" required>
                                    @error('number')
                                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form"> <label class="form-label w-full flex flex-col sm:flex-row">
                                        Población <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="text" name="city" wire:model="city" class="form-control"
                                        placeholder="" minlength="2" required>
                                    @error('city')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="input-form"> <label class="form-label w-full flex flex-col sm:flex-row">
                                        Barrio <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="text" name="district" wire:model="district" class="form-control"
                                        placeholder="" minlength="2" required>
                                    @error('district')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form"> <label class="form-label w-full flex flex-col sm:flex-row">
                                        Provincia <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="text" name="state" wire:model="state" class="form-control"
                                        placeholder="" minlength="2" required>
                                    @error('state')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form"> <label class="form-label w-full flex flex-col sm:flex-row">
                                        Teléfono <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="number" name="phone" wire:model="phone" class="form-control"
                                        placeholder="" minlength="5" required>
                                    @error('phone')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form">
                                    <label class="form-label w-full flex flex-col sm:flex-row">
                                        Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="email" name="email" wire:model="email" class="form-control"
                                        placeholder="" minlength="2" required>
                                    @error('email')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-form">
                                    <label class="form-label w-full flex flex-col sm:flex-row">
                                        Contraseña <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                    </label>
                                    <input type="password" name="password" wire:model.lazy="password"
                                        class="form-control" placeholder="" minlength="8" required>
                                    @error('password')
                                        <div class="text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                <button wire:click.prevent="pasoDos" type="button"
                                    class="btn btn-primary w-24 ml-2">
                                    Siguiente
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- END: Wizard Layout -->
                </div>
                <!-- END: Content -->
            </div>

    </body>
</div>
