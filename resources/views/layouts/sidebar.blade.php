<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @if (Auth::user()->role === 'admin')
            {{-- website custmoziation --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gear-wide-connected"></i><span>Website Customization</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('calltoaction.index') }}">
                            <i class="bi bi-circle"></i><span>Call To Action</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('aboutus.index') }}">
                            <i class="bi bi-circle"></i><span>About Us</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- employes --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('employe_overview.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Employes</span>
                </a>
            </li>

            {{-- zones --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('zone.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Zones</span>
                </a>
            </li>

            {{-- warehouses --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('warehouse.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Warehouse</span>
                </a>
            </li>


            {{-- Order --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('order.index') }}">
                    <i class="bi bi-book"></i>
                    <span>Order</span>
                </a>
            </li>

            {{-- invoice --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('invoice.index') }}">
                    <i class="bi bi-cash"></i>
                    <span>Invoice</span>
                </a>
            </li>



            {{-- employes part --}}
        @else
            <li class="nav-item">

                {{-- warehouses --}}
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('warehouse.index') }}">
                        <i class="bi bi-people"></i>
                        <span>Warehouse</span>
                    </a>
                </li>

                {{-- Order --}}
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('order.index') }}">
                        <i class="bi bi-book"></i>
                        <span>Order</span>
                    </a>
                </li>
            </li>
            <!-- End Tables Nav -->
        @endif

        </li>

</aside>
