<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent<span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}" class="">
                Todos los USuarios (all)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'f') }}" class="">
                Lista de Usuarios Femenina (get)
            </a>
        </li>
        <li>
            <a href="{{ route('get', 'm') }}" class="">
                Lista de Usuarios Masculina (get)
            </a>
        </li>

        <li>
            <a href="{{ route('get-custom') }}" class="">
                Lista de Usuarios Femeninos (get con Array)
            </a>
        </li>
    </ul>
</li>