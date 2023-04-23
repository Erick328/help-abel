<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="{{route('categorias.index')}}">
        <i class=" fas fa-building"></i><span>Categoria</span>
    </a>
    <a class="nav-link" href="{{route('articulos.index')}}">
        <i class=" fas fa-building"></i><span>Articulos</span>
    </a>
</li>
