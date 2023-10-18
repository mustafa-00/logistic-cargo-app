<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @if(Auth::user()->role === "admin")


        {{-- warehouses --}}
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Warehouses-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Warehouses</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Warehouses-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('warehouse.index') }}">
                    <i class="bi bi-circle"></i><span>All Warehouses</span>
                    </a>
                </li>
                @foreach ($warehouses as $warehouse)
                <li>
                    <a href="{{ route('warehouse.show', $warehouse->id) }}">
                    <i class="bi bi-circle"></i><span>{{ $warehouse->name }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </li> --}}


        {{-- employes --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('employe_overview.index') }}">
              <i class="bi bi-people"></i>
              <span>Employes</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('warehouse.index') }}">
              <i class="bi bi-people"></i>
              <span>Warehouse</span>
            </a>
        </li>

        {{-- product --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('product.index') }}">
              <i class="bi bi-pen"></i>
              <span>Product</span>
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

        @else

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="tables-general.html">
                <i class="bi bi-circle"></i><span>General Tables</span>
                </a>
            </li>
            <li>
                <a href="tables-data.html">
                <i class="bi bi-circle"></i><span>Data Tables</span>
                </a>
            </li>
            </ul>
            {{-- profile --}}
            <li class="nav-item">
                <a class="nav-link " href="{{ route('profile.index') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
                </a>
            </li>
        </li><!-- End Tables Nav -->

        @endif

    </li>

  </aside>
