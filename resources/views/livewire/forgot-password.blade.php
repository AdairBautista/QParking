 {{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<section class="vh-lg-100 mt-4 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            {{-- CRÍTICA 1 y 2: Ruta y Icono Corregidos y Traducidos --}}
            <p class="text-center">
                <a href="{{ route('qp.auth.login') }}" class="d-flex align-items-center justify-content-center">
                    {{-- Parche temporal FA Solid (Reemplaza SVG) --}}
                    <i class="fa-solid fa-arrow-left icon icon-xs me-2" aria-hidden="true" role="img"></i> 
                    Volver a iniciar sesión
                </a>
            </p>
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                    {{-- CRÍTICA 5: Traducción de Título --}}
                    <h1 class="h3">¿Olvidaste tu contraseña?</h1>
                    {{-- CRÍTICA 5: Traducción de Descripción --}}
                    <p class="mb-4">¡Tranquilo! Simplemente escribe tu email y te enviaremos un código para restablecer tu contraseña.</p>
                    
                    <form wire:submit.prevent="recoverPassword" action="#" method="POST">
                        <div class="mb-4">
                            {{-- CRÍTICA 5: Traducción de Label --}}
                            <label for="email">Tu Email</label>
                            <div class="input-group">
                                {{-- Falta icono de email, lo añadimos para consistencia --}}
                                <span class="input-group-text" id="email-addon">
                                    <i class="fa-solid fa-envelope icon icon-xs text-gray-600" aria-hidden="true" role="img"></i> 
                                </span>
                                {{-- CRÍTICA 3: Se añade la clase de validación --}}
                                <input wire:model='email' type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    id="email" placeholder="juan@empresa.com" required autofocus>
                            </div>  
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        {{-- CRÍTICA 4: Traducción de Notificaciones (DEUDA TÉCNICA por no usar SweetAlert/Notyf) --}}
                        @if($mailSentAlert)
                            <div class="alert alert-success" role="alert">
                                Se ha enviado un correo electrónico con el enlace para restablecer la contraseña.
                            </div>
                        @endif
                        @if($showDemoNotification)
                            <div class="alert alert-danger" role="alert">
                                No puedes realizar esta acción en la versión de demostración.
                            </div>
                        @endif

                        <div class="d-grid">
                            {{-- CRÍTICA 5: Traducción de Botón --}}
                            <button type="submit" class="btn btn-primary">Recuperar contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>