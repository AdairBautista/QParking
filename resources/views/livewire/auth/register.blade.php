 
{{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        {{-- Eliminado wire:ignore.self, a menos que se justifique conflicto JS --}}
        <div class="row justify-content-center form-bg-image" data-background-lg="/assets/img/illustrations/signin.svg">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        {{-- CORRECCIÓN 1: Traducción --}}
                        <h1 class="mb-0 h3">Crear Cuenta</h1> 
                    </div>
                    <form wire:submit.prevent="register" action="#" method="POST">
                        
                        <div class="form-group mt-4 mb-4">
                            {{-- CORRECCIÓN 1: Traducción --}}
                            <label for="email">Tu Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">
                                    {{-- CORRECCIÓN 3: Parche FA Solid (Email) --}}
                                    <i class="fa-solid fa-envelope icon icon-xs text-gray-600" aria-hidden="true" role="img"></i>
                                </span>
                                {{-- CORRECCIÓN 4: Validación y CORRECCIÓN 6: wire:model.lazy --}}
                                <input wire:model.lazy="email" id="email" type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    placeholder="ejemplo@empresa.com" autofocus required>
                            </div>
                            @error('email') 
                                <div class="invalid-feedback"> {{ $message }} </div> 
                            @enderror 
                        </div>

                        <div class="form-group">
                            <div class="form-group mb-4">
                                {{-- CORRECCIÓN 1: Traducción --}}
                                <label for="password">Tu Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4">
                                        {{-- CORRECCIÓN 3: Parche FA Solid (Lock) --}}
                                        <i class="fa-solid fa-lock icon icon-xs text-gray-600" aria-hidden="true" role="img"></i>
                                    </span>
                                    {{-- CORRECCIÓN 4: Validación --}}
                                    <input wire:model.lazy="password" type="password" placeholder="Contraseña" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        id="password" required>
                                </div>  
                                @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                            
                            <div class="form-group mb-4">
                                {{-- CORRECCIÓN 1: Traducción --}}
                                <label for="confirm_password">Confirmar Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon5">
                                        {{-- CORRECCIÓN 3: Parche FA Solid (Lock) --}}
                                        <i class="fa-solid fa-lock icon icon-xs text-gray-600" aria-hidden="true" role="img"></i>
                                    </span>
                                    {{-- CORRECCIÓN 4: Validación --}}
                                    <input wire:model.lazy="passwordConfirmation" type="password" placeholder="Confirmar Contraseña" 
                                        class="form-control @error('passwordConfirmation') is-invalid @enderror" 
                                        id="confirm_password" required>
                                </div>  
                                {{-- Nota: El error de 'passwordConfirmation' usualmente se lanza en 'password' por el Livewire --}}
                            </div>
                            
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                <label class="form-check-label fw-normal mb-0" for="terms">
                                    {{-- CORRECCIÓN 1: Traducción --}}
                                    Acepto los <a href="#">términos y condiciones</a>
                                </label>
                            </div>
                        </div>
                        <div class="d-grid">
                            {{-- CORRECCIÓN 1: Traducción y CORRECCIÓN 6: Consistencia de botón --}}
                            <button type="submit" class="btn btn-primary">Registrarme</button>
                        </div>
                    </form>
                    
                    {{-- CORRECCIÓN 5: Bloque de Social Login ELIMINADO para consistencia --}}
                    
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            {{-- CORRECCIÓN 1: Traducción --}}
                            ¿Ya tienes una cuenta?
                            {{-- CORRECCIÓN 2: Ruta con slug 'qp' --}}
                            <a href="{{ route('qp.auth.login') }}" class="fw-bold">Inicia sesión aquí</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>