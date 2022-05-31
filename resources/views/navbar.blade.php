<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#" class="nav-link dropdown-toggle">Conceitos</a>
                <ul class="dropdown-menu">
                    <li > <a class="dropdown-item" href="{{route('listar_conceitos')}}">Listar </a> </li>
                    <li > <a class="dropdown-item" href="{{route('cadastro_de_conceito')}}">Criar </a> </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#" class="nav-link dropdown-toggle">Projetos</a>
                <ul class="dropdown-menu">
                    <li > <a class="dropdown-item" href="{{route('listar_projetos')}}">Listar </a> </li>
                    <li > <a class="dropdown-item" href="{{route('cadastro_de_projeto')}}">Criar </a> </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="{{route('listar_estudo')}}" class="nav-link">Histórico de estudo</a>
            </li>

        </ul>
    </div>
</nav>