<div>
    @if (!$form)

        <body class="main">
            <div class="flex">
                <div class="content">
                    <div class="flex items-center mt-8">
                        <h2 class="intro-y text-lg font-medium mr-auto">
                            Wizard Layout
                        </h2>
                    </div>
                    <!-- BEGIN: Wizard Layout -->
                    <div class="intro-y box py-10 sm:py-20 mt-5">
                        <div class="flex justify-center">
                            <div
                                class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">
                                1
                            </div>
                            <div
                                class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">
                                2
                            </div>
                            <div
                                class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">
                                3
                            </div>
                            <div
                                class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">
                                4
                            </div>
                            <div class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">5</div>
                            <div
                                class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">
                                6
                            </div>
                        </div>
                        <div class="px-5 mt-10">
                            <div class="font-medium text-center text-lg">Creación de mesas</div>
                            <div class="text-gray-600 text-center mt-2">Cree la cantidad de mesas necesarias para su
                                negocio.</div>
                        </div>
                        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
                            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                                <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                                    <div class="sm:flex items-center sm:mr-4">
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-5">Selecione</label>
                                        <select id="tabulator-html-filter-field"
                                            class="form-select w-full sm:w-32 xxl:w-full mt-2 sm:mt-0 sm:w-auto">
                                            <option value="name">Salón principal</option>
                                            <option value="remaining_stock">Terraza</option>
                                        </select>
                                    </div>
                                </form>
                                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                                    <div class="btn btn-primary shadow-md mr-2">Agregar</div>
                                    <div class="dropdown ml-auto sm:ml-0">
                                        <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300"
                                            aria-expanded="false">
                                            <span class="w-5 h-5 flex items-center justify-center"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus w-4 h-4">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>Agregar<line x1="5" y1="12" x2="19"
                                                        y2="12"></line>
                                                </svg> </span>
                                        </button>
                                        <div class="dropdown-menu w-40">
                                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                                <a href=""
                                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-file-plus w-4 h-4 mr-2">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="12" y1="18" x2="12"
                                                            y2="12"></line>
                                                        <line x1="9" y1="15" x2="15"
                                                            y2="15"></line>
                                                    </svg> Agregar salón </a>
                                                    <button wire:click.prevent="crearMesa" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-users w-4 h-4 mr-2">
                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg> Agregar mesa</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t border-theme-5">
                                <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                    class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                    style="text-align: -webkit-center;">
                                    <div class="box rounded-md p-3 relative zoom-in">
                                        <div class="flex-none pos-image relative block"
                                            style="background-color: #62f962;">
                                            <div class="pos-image__preview text-ali">
                                                <img alt="Rubick Tailwind HTML Admin Template"
                                                    src="dist/images/mesa.png">
                                            </div>
                                        </div>
                                        <div
                                            class="tn btn-elevated-secondary block font-medium text-center truncate mt-3">
                                            Mesa uno</div>
                                        <button onclick="openPanel()" type="button"
                                            class="btn btn-outline-secondary w-30 inline-block mr-1 mb-2 mt-3">
                                            Disponible</button>
                                    </div>
                                </a>
                                <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                    class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                    style="text-align: -webkit-center;">
                                    <div class="box rounded-md p-3 relative zoom-in">
                                        <div class="flex-none pos-image relative block"
                                            style="background-color: #fc7899;">
                                            <div class="pos-image__preview text-ali">
                                                <img alt="Rubick Tailwind HTML Admin Template"
                                                    src="dist/images/mesa.png">
                                            </div>
                                        </div>
                                        <div
                                            class="tn btn-elevated-secondary block font-medium text-center truncate mt-3">
                                            Mesa dos</div>
                                        <button onclick="openPanel()" type="button"
                                            class="btn btn-outline-secondary w-30 inline-block mr-1 mb-2 mt-3">
                                            No disponible</button>
                                    </div>
                                </a>
                                <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                    class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                    style="text-align: -webkit-center;">
                                    <div class="box rounded-md p-3 relative zoom-in">
                                        <div class="flex-none pos-image relative block"
                                            style="background-color: #fdfd77;">
                                            <div class="pos-image__preview text-ali">
                                                <img alt="Rubick Tailwind HTML Admin Template"
                                                    src="dist/images/mesa.png">
                                            </div>
                                        </div>
                                        <div
                                            class="tn btn-elevated-secondary block font-medium text-center truncate mt-3">
                                            Mesa tres</div>
                                        <button onclick="openPanel()" type="button"
                                            class="btn btn-outline-secondary w-30 inline-block mr-1 mb-2 mt-3">
                                            Pendiente</button>
                                    </div>
                                </a>
                                <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                    class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                    style="text-align: -webkit-center;">
                                    <div class="box rounded-md p-3 relative zoom-in">
                                        <div class="flex-none pos-image relative block"
                                            style="background-color: #fdfd77;">
                                            <div class="pos-image__preview text-ali">
                                                <img alt="Rubick Tailwind HTML Admin Template"
                                                    src="dist/images/mesa.png">
                                            </div>
                                        </div>
                                        <div
                                            class="tn btn-elevated-secondary block font-medium text-center truncate mt-3">
                                            Mesa cuatro</div>
                                        <button onclick="openPanel()" type="button"
                                            class="btn btn-outline-secondary w-30 inline-block mr-1 mb-2 mt-3">
                                            Pendiente</button>
                                    </div>
                                </a>
                                <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                    class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                    style="text-align: -webkit-center;">
                                    <div class="box rounded-md p-3 relative zoom-in">
                                        <div class="flex-none pos-image relative block"
                                            style="background-color: #fc7899;">
                                            <div class="pos-image__preview text-ali">
                                                <img alt="Rubick Tailwind HTML Admin Template"
                                                    src="dist/images/mesa.png">
                                            </div>
                                        </div>
                                        <div
                                            class="tn btn-elevated-secondary block font-medium text-center truncate mt-3">
                                            Mesa cinco</div>
                                        <button onclick="openPanel()" type="button"
                                            class="btn btn-outline-secondary w-30 inline-block mr-1 mb-2 mt-3">
                                            No disponible</button>
                                    </div>
                                </a>
                                <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                    class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                    style="text-align: -webkit-center;">
                                    <div class="box rounded-md p-3 relative zoom-in">
                                        <div class="flex-none pos-image relative block"
                                            style="background-color: #62f962;">
                                            <div class="pos-image__preview text-ali">
                                                <img alt="Rubick Tailwind HTML Admin Template"
                                                    src="dist/images/mesa.png">
                                            </div>
                                        </div>
                                        <div
                                            class="tn btn-elevated-secondary block font-medium text-center truncate mt-3">
                                            Mesa seis</div>
                                        <button onclick="openPanel()" type="button"
                                            class="btn btn-outline-secondary w-30 inline-block mr-1 mb-2 mt-3">
                                            Disponible</button>
                                    </div>
                                </a>
                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            </div>

                            <button wire:click.prevent="pasoDos" type="button" class="btn btn-primary w-30 ml-2">
                                Siguiente
                            </button>
                        </div>
                    </div>
                    <!-- END: Wizard Layout -->
                </div>
                <!-- END: Content -->
            </div>
        </body>
        <!-- BEGIN: Modal Nueva familia -->
        <div id="programmatically-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">Selecciona una opción</h2>
                    </div>
                    <div class="modal-body p-10 text-center">
                        <button wire:click.prevent="crearFamilia" class="btn btn-primary mr-1">Agregar nuevo salón</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal Nueva familia -->
    @else
        @include('livewire.registro.mesas.form')
    @endif
    <script>
        const inputSearch = document.getElementById('search')
        inputSearch.addEventListener('change', (e) => {
            @this.search = e.target.value;
        })

        // funcion para abrir panel
        function openPanel(action = '') {
            if (action == 'add') {
                @this.resetUI()
            }
            var modal = document.getElementById("panelProduct")
            modal.classList.add("overflow-y-auto", "show")
            modal.style.cssText = "margin-top: 0px; margin-left: 0px; padding-left: 17px; z-index: 100;"
        }
        // funcion para cerrar panel
        function closePanel() {
            var modal = document.getElementById("panelProduct")
            modal.classList.remove("overflow-y-auto", "show")
            modal.style.cssText = ""
        }
        // escuchar evento open-modal
        window.addEventListener('open-modal', event => {
            openPanel()
        })
        // escuchar evento noty
        window.addEventListener('noty', event => {
            if (event.detail.action == 'close-modal') closePanel()
        })

        // iniciar el teclado en el panel modal
        KioskBoard.run('.kioskboard', {});
    </script>
</div>
