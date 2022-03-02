<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src={{ asset("assets/images/logo/logo.png") }} alt="Logo" srcset=""></a>
                </div>

                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                {{-- <li class="sidebar-title">Bonjour</li>
                <li class="sidebar-title">nom : {{ Auth::user()->name}}</li>
                <li class="sidebar-title">prenom : {{ Auth::user()->prenom}}</li> --}}
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : ''; }} ">
                    <a href={{ route("dashboard") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('dashboard/services') ? 'active' : ''; }} ">
                    <a href={{ route("services.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>services</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('dashboard/projets') ? 'active' : ''; }}">
                    <a href={{ route("projets.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>projets</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('dashboard/projetshow') ? 'active' : ''; }}">
                    <a href={{ route("projetshow.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>projets show</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('dashboard/blog') ? 'active' : ''; }}">
                    <a href={{ route("blog.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Blog</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('dashboard/contact') ? 'active' : ''; }}">
                    <a href={{ route("contact.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Contact</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
