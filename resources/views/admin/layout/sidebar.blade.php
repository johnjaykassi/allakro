<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Principal</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-account-key"></i></span>
                <span class="menu-title">Administration</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('liste.admin') }}">Admins</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('liste.born') }}">
                <span class="icon-bg"><i class="mdi mdi-account-multiple-plus"></i></span>
                <span class="menu-title">Naissances</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('liste.death') }}">
                <span class="icon-bg"><i class="mdi mdi-account-multiple-minus"></i></span>
                <span class="menu-title">Décès</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('liste.arrange') }}">
                <span class="icon-bg"><i class="mdi mdi-arrow-down"></i></span>
                <span class="menu-title">Aménagés </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('liste.demenage') }}">
                <span class="icon-bg"><i class="mdi mdi-arrow-up"></i></span>
                <span class="menu-title">Deménagés</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('liste.job') }}">
                <span class="icon-bg"><i class="mdi mdi-human-male"></i></span>
                <span class="menu-title">Jobs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">Utilisateurs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route("users") }}"> Liste des users</a>
                    </li>
                </ul>
            </div>
        </li>
        
    </ul>
</nav>
