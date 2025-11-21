 
{{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image" data-background-lg="/assets/img/illustrations/signin.svg">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h3">Register</h1> 
                    </div>
                    <form wire:submit.prevent="register" action="#" method="POST">
                        
                        <div class="form-group mt-4 mb-4">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">
                                    <i class="fa-solid fa-envelope icon icon-xs text-gray-600" aria-hidden="true" role="img"></i>
                                </span>
                                <input wire:model.lazy="email" id="email" type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    placeholder="name@example.com" autofocus required>
                            </div>
                            @error('email') 
                                <div class="invalid-feedback"> {{ $message }} </div> 
                            @enderror 
                        </div>

                        <div class="form-group">
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4">
                                        <i class="fa-solid fa-lock icon icon-xs text-gray-600" aria-hidden="true" role="img"></i>
                                    </span>
                                    <input wire:model.lazy="password" type="password" placeholder="Password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        id="password" required>
                                </div>  
                                @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                            
                            <div class="form-group mb-4">
                                <label for="confirm_password">Confirm password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon5">
                                        <i class="fa-solid fa-lock icon icon-xs text-gray-600" aria-hidden="true" role="img"></i>
                                    </span>
                                    <input wire:model.lazy="passwordConfirmation" type="password" placeholder="Confirm password" 
                                        class="form-control @error('passwordConfirmation') is-invalid @enderror" 
                                        id="confirm_password" required>
                                </div>  
                            </div>
                            
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                <label class="form-check-label fw-normal mb-0" for="terms">
                                    I agree to <a href="#"> terms and conditions</a>
                                </label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            Already got an acount?
                            <a href="{{ route('qp.auth.login') }}" class="fw-bold">Log In</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>