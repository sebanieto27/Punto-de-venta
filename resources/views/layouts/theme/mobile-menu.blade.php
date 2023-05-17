<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img class="w-8" src="{{ asset('dist/images/favicoin.png') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-29 py-5 hidden">

        <li>
            <a href="{{ url('categories') }}" class="menu">
                <div class="menu__icon"> <i data-feather="layers"></i> </div>
                <div class="menu__title"> Categorías </div>
            </a>
        </li>
        <li>
            <a href="{{ url('products') }}" class="menu">
                <div class="menu__icon"> <i data-feather="coffee"></i> </div>
                <div class="menu__title"> Productos </div>
            </a>
        </li>
        <li>
            <a href="{{ url('sales') }}" class="menu">
                <div class="menu__icon"> <i data-feather="shopping-cart"></i> </div>
                <div class="menu__title"> Vender</div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>

        <li>
            <a href="{{ url('customers') }}" class="menu">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title"> Puestos de ventas</div>
            </a>
        </li>
        <li>
            <a href="{{ url('users') }}" class="menu">
                <div class="menu__icon"> <i data-feather="key"></i> </div>
                <div class="menu__title"> Usuarios </div>
            </a>
        </li>

        <li class="side-nav__devider my-6"></li>

        <li>
            <a href="{{ url('reports') }}" class="menu">
                <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                <div class="menu__title"> Reportes </div>
            </a>
        </li>


        <li class="side-nav__devider my-6"></li>

        <li>
            <a href="{{ url('reports') }}" class="menu">
                <div class="menu__icon"> <i data-feather="settings"></i> </div>
                <div class="menu__title"> Settings </div>
            </a>
        </li>

    </ul>
</div>
