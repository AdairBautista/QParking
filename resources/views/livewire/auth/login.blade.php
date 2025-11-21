{{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image"
            data-background-lg="/assets/img/illustrations/signin.svg">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-3 h3">QParking</h1>
                        <p class="mb-0">Welcome</p>
                    </div>
                    <form wire:submit.prevent="login" action="#" class="mt-4" method="POST">
                        
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    {{-- Note: I just put this here because x-icon isnt working DONT TOUCH Ill fix it --}}
                                    {{-- And yes Ill do the same everywhere else until I can fix it --}}
                                    <i class="fa-solid fa-envelope icon icon-xs text-gray-600" aria-hidden="true" role="img"></i> 
                                </span>
                                <input wire:model.lazy="email" type="email" 
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="name@example.com" id="email" autofocus required>
                            </div>
                            @error('email') 
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="fa-solid fa-lock icon icon-xs text-gray-600" aria-hidden="true" role="img"></i> 
                                    </span>
                                    <input wire:model.lazy="password" type="password" placeholder="password"
                                        class="form-control @error('password') is-invalid @enderror" 
                                        id="password" required>
                                </div>
                                @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-top mb-4">
                                <div class="form-check">
                                    <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                        value="" id="remember">
                                    <label class="form-check-label mb-0" for="remember">
                                        Remember me
                                    </label>
                                </div>
                                <div>
                                    <a href="{{ route('qp.auth.forgot-password') }}" class="small text-right">Lost password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            Not registered?
                            <a href="{{ route('qp.auth.register') }}" class="fw-bold">Create account</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>