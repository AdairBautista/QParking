{{-- 
Company: CETAM
Project: QPARK
File: parking-lot-create.blade.php
Created on: 21/11/2025
Created by: Carlos
Approved by: 

Changelog:
- ID: 1 | Date: 21/11/2025
Modified by: <Tu nombre aquí>
Description: Initial form structure for new parking lot registration using Livewire binding.
--}}
<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image"
        data-background-lg="/assets/img/illustrations/signin.svg">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                <div class="text-center text-md-center mb-4 mt-md-0">
                    <h1 class="mb-3 h3">Register new parking</h1>
                    <p class="mb-0">Fill in the fields to register a parking lot</p>
                </div>
                {{-- Ill check this later --}}
                <form wire:submit.prevent="saveParkingLot" action="#" class="mt-4" method="">
                    <div class="form-group mb-4">
                        <label for="name">Parking name</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon6">
                                {{-- Ill think later about which icon to use --}}
                            </span>
                            <input wire:model.lazy="name" type="text"
                            class="form-control @error ('name') is invalid @enderror"
                            placeholder="Parking name" id="name" autofocus required>
                        </div>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="adress">Adress</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon7">
                                    {{-- Same for this one --}}
                                </span>
                                <input wire:model.lazy="adress" type="text"
                                class="form-control @error ('adress') is invalid @enderror"
                                placeholder="adress" id="adress" autofocus required>
                            </div>
                            @error('adress')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="max-capacity">Max capacity</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon8">
                                    {{-- Same for this one --}}
                                </span>
                                <input wire:model.lazy="max-capacity" type="int"
                                class="form-control @error ('max-capacity') is invalid @enderror"
                                placeholder="max-capacity" id="max-capacity" autofocus required>
                            </div>
                            @error('max-capacity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="register" class="btn btn-primary">Register</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            {{-- I need to put here the route where this should return --}}
                            <a href="{{ route('') }}" class="fw-bold">Return</a>
                        </span>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>