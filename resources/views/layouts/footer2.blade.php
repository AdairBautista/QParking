{{-- CRÍTICA 1: Eliminados todos los widgets de theme-settings por ser remanentes de la plantilla y no ser funcionales al proyecto QParking. --}}

<footer class="p-5 mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                
                <p class="mb-3 text-center">
                    © {{ date('Y') }} 
                    <span class="text-primary fw-normal">QParking.</span> Todos los derechos reservados.
                </p>

                <ul class="list-inline list-group-flush list-group-borderless">
                    {{-- Usamos el slug 'qp' y la traducción --}}
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.about') }}">Acerca de</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.support') }}">Soporte</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.privacy') }}">Privacidad</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.contact') }}">Contacto</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>