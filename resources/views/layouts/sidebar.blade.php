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
                    {{-- Call to Action --}}
                    <li>
                        <a href="{{ route('calltoaction.index') }}">
                            <i class="bi bi-circle"></i><span>Call To Action</span>
                        </a>
                    </li>
                    {{-- About Us --}}
                    <li>
                        <a href="{{ route('aboutus.index') }}">
                            <i class="bi bi-circle"></i><span>About Us</span>
                        </a>
                    </li>
                    {{-- Our Services --}}
                    <li>
                        <a href="{{ route('ourservices.index') }}">
                            <i class="bi bi-circle"></i><span>Our Services</span>
                        </a>
                    </li>
                    {{-- Our Mission --}}
                    <li>
                        <a href="{{ route('ourmission.index') }}">
                            <i class="bi bi-circle"></i><span>Our Mission</span>
                        </a>
                    </li>
                    {{-- Team Members --}}
                    <li>
                        <a href="{{ route('teammember.index') }}">
                            <i class="bi bi-circle"></i><span>Team Members</span>
                        </a>
                    </li>
                    {{-- Testimonial --}}
                    <li>
                        <a href="{{ route('testimonial.index') }}">
                            <i class="bi bi-circle"></i><span>Testimonial</span>
                        </a>
                    </li>
                    {{-- Contact --}}
                    <li>
                        <a href="{{ route('contact.index') }}">
                            <i class="bi bi-circle"></i><span>Contact</span>
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

                {{-- zones --}}
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('zone.index') }}">
                        <i class="bi bi-people"></i>
                        <span>Zones</span>
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

        @endif

        </li>

</aside>
