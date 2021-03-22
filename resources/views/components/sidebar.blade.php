<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <h1><a href="/" class="logo">Fazriansyah</a></h1>
    <ul class="list-unstyled components mb-5">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="/"><span class="fa fa-home mr-3"></span> Homepage</a>
        </li>
        <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard"><span class="fa fa-user mr-3"></span> Dashboard</a>
        </li>
        <li class="{{ request()->is('setting') ? 'active' : '' }}">
            <a href="/setting"><span class="fa fa-cogs mr-3"></span> Setting</a>
        </li>
    </ul>
    <div class="text-center">
        <a href="/logout" class="btn btn-danger" onclick="return confirm('Anda yakin ingin logout?');"><span class="fas fa-sign-out-alt"> Logout</span></a>
    </div>
</nav>