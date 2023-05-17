<div>

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
                        <div class="intro-y w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">1
                        </div>
                        <div class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">2</div>
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
                        <div class="font-medium text-center text-lg">Seleccione tipo de negocio</div>
                        <div class="text-gray-600 text-center mt-2">Por favor seleccione el tipo de negocio que desea
                            instalar.</div>
                    </div>

                    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
                        <div class="grid grid-cols-3 px-5 gap-5 items-center justify-center mt-5"
                            style="justify-items: center;">

                            <div
                                class="w-40 h-44  col-span-1 items-center justify-self-center">
                                <div class="w-40 h-40  rounded-full overflow-hidden">
                                    <img alt="Sistema POS Buela" class="w-full h-full object-cover"
                                        src="dist/images/panaderia.png">
                                </div>
                                <div class="text-gray-600 text-center mt-2 text-sm">Panadería</div>
                            </div>

                            <div
                                class="w-40 h-44  col-span-1 items-center justify-self-center">
                                <div class="w-40 h-40  rounded-full overflow-hidden">
                                    <img alt="Sistema POS Buela" class="w-full h-full object-cover"
                                        src="dist/images/bar.jpg">
                                </div>
                                <div class="text-gray-600 text-center mt-2 text-sm">Bar/Cafetería</div>
                            </div>

                            <div
                                class="w-40 h-44  col-span-1 items-center justify-self-center">
                                <div class="w-40 h-40  rounded-full overflow-hidden">
                                    <img alt="Sistema POS Buela" class="w-full h-full object-cover"
                                        src="dist/images/restaurante.jpg">
                                </div>
                                <div class="text-gray-600 text-center mt-2 text-sm">Restaurante</div>
                            </div>

                            <div
                                class="w-40 h-44  col-span-1 items-center justify-self-center">
                                <div class="w-40 h-40  rounded-full overflow-hidden">
                                    <img alt="Sistema POS Buela" class="w-full h-full object-cover"
                                        src="dist/images/fastfood.jpg">
                                </div>
                                <div class="text-gray-600 text-center mt-2 text-sm">Fastfood</div>
                            </div>

                            <div
                                class="w-40 h-44  col-span-1 items-center justify-self-center">
                                <div class="w-40 h-40  rounded-full overflow-hidden">
                                    <img alt="Sistema POS Buela" class="w-full h-full object-cover"
                                        src="dist/images/retail.jpg">
                                </div>
                                <div class="text-gray-600 text-center mt-2 text-sm">Retail</div>
                            </div>

                            <div
                                class="w-40 h-44  col-span-1 items-center justify-self-center">
                                <div class="w-40 h-40  rounded-full overflow-hidden">
                                    <img alt="Sistema POS Buela" class="w-full h-full object-cover"
                                        src="dist/images/barberia.jpg">
                                </div>
                                <div class="text-gray-600 text-center mt-2 text-sm">Barbería</div>
                            </div>

                        </div>
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            <button wire:click.prevent="pasoTres" type="button" class="btn btn-primary w-24 ml-2">
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
</div>
