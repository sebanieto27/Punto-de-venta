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
                            <div class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">4</div>
                            <div
                                class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">
                                5
                            </div>
                            <div
                                class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">
                                6
                            </div>
                        </div>
                        <div class="px-5 mt-10">
                            <div class="font-medium text-center text-lg">Carga de familias y artículos</div>
                            <div class="text-gray-600 text-center mt-2">Seleccione familias y artículos nuevos o
                                predefinidos para su negocio.</div>
                        </div>
                        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
                            <div class="intro-y col-span-12 lg:col-span-8">
                                <div class="grid grid-cols-12 gap-5 mt-5">
                                    <a class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in"
                                        style="background-color: #3788d8" id="programmatically-show-modal"
                                        href="javascript:;">
                                        <div class="font-medium text-xl" style="text-align: center; color: aliceblue;">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar nueva familia
                                        </div>
                                    </a>

                                    <div
                                        class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                                        <div class="font-medium text-base">Postres</div>
                                        <div class="text-gray-600">5 artículos</div>
                                        <td class="table-report__action w-56">
                                            <div class="flex" style="justify-content: end;">
                                                <button class="btn btn-dark mr-1 mb-2"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger mr-1 mb-2"> <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </div>
                                    <div
                                        class="col-span-12 sm:col-span-4 xxl:col-span-3 box bg-theme-1 dark:bg-theme-1 p-5 cursor-pointer zoom-in">
                                        <div class="font-medium text-base text-white">Bebidas</div>
                                        <div class="text-theme-22 dark:text-gray-400">8</div>
                                        <td class="table-report__action w-56">
                                            <div class="flex" style="justify-content: end;">
                                                <button class="btn btn-dark mr-1 mb-2"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger mr-1 mb-2"> <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </div>
                                    <div
                                        class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                                        <div class="font-medium text-base">Pasta</div>
                                        <div class="text-gray-600">4 artículos</div>
                                        <td class="table-report__action w-56">
                                            <div class="flex" style="justify-content: end;">
                                                <button class="btn btn-dark mr-1 mb-2"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger mr-1 mb-2"> <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </div>
                                    <div
                                        class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                                        <div class="font-medium text-base">Pizzas</div>
                                        <div class="text-gray-600">3 artículos</div>
                                        <td class="table-report__action w-56">
                                            <div class="flex" style="justify-content: end;">
                                                <button class="btn btn-dark mr-1 mb-2"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger mr-1 mb-2"> <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </div>
                                    <div
                                        class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                                        <div class="font-medium text-base">Snacks</div>
                                        <div class="text-gray-600">8 artículos</div>
                                        <td class="table-report__action w-56">
                                            <div class="flex" style="justify-content: end;">
                                                <button class="btn btn-dark mr-1 mb-2"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger mr-1 mb-2"> <i class="fa fa-trash"></i>
                                                </button>
                                            </div>

                                        </td>
                                    </div>
                                    <div
                                        class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                                        <div class="font-medium text-base">Ensaladas</div>
                                        <div class="text-gray-600">2 artículos</div>
                                        <td class="table-report__action w-56">
                                            <div class="flex" style="justify-content: end;">
                                                <button class="btn btn-dark mr-1 mb-2"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger mr-1 mb-2"> <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </div>
                                    <div
                                        class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                                        <div class="font-medium text-base">Hamburguesas</div>
                                        <div class="text-gray-600">2 artículos</div>
                                        <td class="table-report__action w-56">
                                            <div class="flex" style="justify-content: end;">
                                                <button class="btn btn-dark mr-1 mb-2"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger mr-1 mb-2"> <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </div>
                                </div>
                                <!-- INICIO DE ARTICULOS -->
                                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start mt-5 border-t border-theme-5 pt-5">
                                    <h2 class="font-medium text-base mr-auto">
                                        Lista de artículos
                                    </h2>
                                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0 ">
                                        <button class="btn btn-primary shadow-md mr-2">
                                            <i class="fa fa-plus" aria-hidden="true" style="margin: inherit;"> </i> Agregar artículo</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t border-theme-5">
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview text-ali">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/cocacola.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Coca Cola</div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview ">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/sprite.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Sprite</div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview ">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/pepsi.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Pepsi</div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview ">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/agua-mineral.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Agua mineral</div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview ">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/soda.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Soda
                                            </div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview text-center">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/aquarius.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Acuarius manzana
                                            </div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview ">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/fanta.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Fanta
                                            </div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                                        class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-2"
                                        style="text-align: -webkit-center;">
                                        <div class="box rounded-md p-3 relative zoom-in">
                                            <div class="flex-none pos-image relative block">
                                                <div class="pos-image__preview ">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                        src="dist/images/patagonia.jpg">
                                                </div>
                                            </div>
                                            <div class="block font-medium text-center truncate mt-3">Cerveza patagonia
                                            </div>
                                            <button onclick="openPanel()" type="button"
                                                class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2 mt-3">
                                                <i class="fa-regular fa-pen-to-square ml-2"></i></i> Editar</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                <button wire:click.prevent="pasoCinco" type="button"
                                    class="btn btn-primary w-24 ml-2">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END: Wizard Layout -->
                </div>
                <!-- END: Content -->
            </div>
        </body>
        @include('livewire.registro.articulos.panel')

        <!-- BEGIN: Modal Nueva familia -->
        <div id="programmatically-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">Selecciona una opción</h2>
                    </div>
                    <div class="modal-body p-10 text-center">
                        <button wire:click.prevent="crearFamilia" class="btn btn-primary mr-1">Agregar nueva
                            familia</button>

                        <button wire:click.prevent="importarFamilia" type="button" class="btn btn-primary mr-1">
                            Importar familia
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Modal Nueva familia -->
    @else
        @include('livewire.registro.familias.form')
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
