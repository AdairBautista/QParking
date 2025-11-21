 {{-- CRÍTICA 2: Eliminados los widgets de "theme-settings" y "Settings" por no ser funcionales al proyecto QParking. --}}

<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
    <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
            {{-- CRÍTICA 1: Copyright reemplazado por la marca QParking --}}
            <p class="mb-0 text-center text-lg-start">
                © {{ date('Y') }} 
                <span class="text-primary fw-normal">QParking.</span> Todos los derechos reservados.
            </p>
        </div>
        <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
            <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                <li class="list-inline-item px-0 px-sm-2">
                    {{-- CRÍTICA 3: Traducción y Enlace de Marca Propia (DEBES definir la ruta) --}}
                    <a href="{{ route('qp.about') }}">Acerca de</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    {{-- CRÍTICA 3: Traducción y Enlace de Soporte --}}
                    <a href="{{ route('qp.support') }}">Soporte</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    {{-- CRÍTICA 3: Enlace de Privacidad, si aplica. --}}
                    <a href="{{ route('qp.privacy') }}">Privacidad</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    {{-- CRÍTICA 3: Enlace de Contacto --}}
                    <a href="{{ route('qp.contact') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</footer>