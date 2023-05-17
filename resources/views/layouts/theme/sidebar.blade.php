 <nav class="side-nav">
     <a href="{{ route('dash') }}" class="intro-x flex items-center pl-5 pt-4">
         <img alt="logo" class="" src="{{ asset('dist/images/logo.png') }}" style="width: 10rem">
     </a>
     <div class="side-nav__devider my-6"></div>
     <ul>
         @if (Auth::user()->profile == 'Admin')
             <li>
                 <a href="{{ url('categories') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                     <div class="side-menu__title"> Categorías </div>
                 </a>
             </li>
             <li>
                 <a href="{{ url('products') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="coffee"></i> </div>
                     <div class="side-menu__title"> Productos </div>
                 </a>
             </li>
             <li>
                 <a href="{{ url('sales') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                     <div class="side-menu__title"> Vender</div>
                 </a>
             </li>
             <li>
                 <a href="{{ url('pedidos') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                     <div class="side-menu__title"> Órdenes</div>
                 </a>
             </li>
             <li class="side-nav__devider my-6"></li>

             <li>
                 <a href="{{ url('customers') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                     <div class="side-menu__title"> Puestos de ventas </div>
                 </a>
             </li>
             <li>
                 <a href="{{ url('users') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="key"></i> </div>
                     <div class="side-menu__title"> Usuarios </div>
                 </a>
             </li>

             <li class="side-nav__devider my-6"></li>

             <li>
                 <a href="{{ url('reports') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                     <div class="side-menu__title"> Reportes </div>
                 </a>
             </li>
             <li class="side-nav__devider my-6"></li>


             <li>
                 <a href="{{ url('settings') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                     <div class="side-menu__title"> Settings </div>
                 </a>
             </li>
         @endif
         @if (Auth::user()->profile == 'Mesero')
             <li>
                 <a href="{{ url('sales') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                     <div class="side-menu__title"> Vender</div>
                 </a>
             </li>
             <li>
                 <a href="{{ url('pedidos') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                     <div class="side-menu__title"> Órdenes</div>
                 </a>
             </li>
             <li class="side-nav__devider my-6"></li>
         @endif
         @if (Auth::user()->profile == 'Cocinero')
             <li>
                 <a href="{{ url('pedidos') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                     <div class="side-menu__title"> Órdenes</div>
                 </a>
             </li>
             <li class="side-nav__devider my-6"></li>
         @endif
         @if (Auth::user()->profile == 'Caja')
             <li>
                 <a href="{{ url('sales') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                     <div class="side-menu__title"> Vender</div>
                 </a>
             </li>
             <li class="side-nav__devider my-6"></li>
             <li>
                 <a href="{{ url('pedidos') }}" class="side-menu">
                     <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                     <div class="side-menu__title"> Órdenes</div>
                 </a>
             </li>
         @endif



     </ul>
 </nav>
