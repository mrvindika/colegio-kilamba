<?php

use App\Models\User;

use function Livewire\Volt\{computed, state};

state(['name'=> '','role'=> '','email'=> '','phone'=> null, 'user'=> (fn(User $user)=> $user)]);



?>
{{-- ------------------------------------------BLADE RESOURCE------------------------------------------- --}}

<div class="row">
    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Perfil de Usuário') }} </x-slot>

    {{-- SHOW USER #DIV --}}
    <div class="col-md-7 mx-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="page-title text-center text-danger">{{ $this->user->fullname }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card py-3">
                            <div class="row">
                                <div class="col-sm-12 d-grid">
                                    <div class="d-flex justify-content-center">
                                        <img class="profile-picture" src="{{ asset('images/avatar.png') }}" alt="Avatar">
                                    </div>
                                    <p class="text-center">
                                        {{$this->user->online? 'Ativo': 'Inativo'}}
                                        <i class="fa fa-circle text-{{$this->user->online? 'success': 'danger'}}"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-form-label text-right">{{ __('Nome') }}:</div>
                                <div class="col-sm-8 col-form-label text-dark">
                                    <i class="fa fa-user"></i>
                                    {{ $this->user->name }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-form-label text-right">{{ __('Privilégio') }}:</div>
                                <div class="col-sm-8 col-form-label text-dark">
                                    <i class="fa fa-user-lock"></i>
                                    {{ $this->user->role }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-form-label text-right">{{ __('Email') }}:</div>
                                <div class="col-sm-8 col-form-label text-dark">
                                    <i class="fa fa-at"></i>
                                    {{ $this->user->email }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-form-label text-right">{{ __('Telemóvel') }}:</div>
                                @if($this->user->phone)
                                    <div class="col-sm-8 col-form-label text-dark"> 
                                        <i class="fa fa-phone"></i> +244 
                                        {{ $this->user->phone }}
                                    </div>
                                @else
                                    <div class="col-sm-8 col-form-label text-dark"> 
                                        <i class="fa fa-phone"></i> 
                                        <span class="text-muted">{{ 'Não registado' }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="accordion" id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-2">
                                    <h6 class="mb-0">
                                        <button class="collapsed btn btn-info btn-block btn-rounded" data-toggle="collapse" href="#last-session" aria-expanded="false" aria-controls="last-session">
                                        {{ __('Sessão') }}
                                        </button>
                                    </h6>
                                </div>
                                <div id="last-session" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        @if($this->user->last_session)
                                            <div class="row">
                                                <div class="col-sm-4 col-form-label text-right">{{ __('Última Sessão') }}:</div>
                                                <div class="col-sm-8 col-form-label text-dark">
                                                    <i class="fa fa-clock"></i> 
                                                    {{ $this->user->last_session->activity }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-form-label text-right">{{ __('Dispositivo') }}:</div>
                                                <div class="col-sm-8 col-form-label text-dark">
                                                    <i class="{{$this->user->last_session->device_icon}}"></i> 
                                                    {{ $this->user->last_session->device }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-form-label text-right">{{ __('Plataforma') }}:</div>
                                                <div class="col-sm-8 col-form-label text-dark">
                                                    <i class="{{$this->user->last_session->platform_icon}}"></i> 
                                                    {{ $this->user->last_session->platform }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-form-label text-right">{{ __('Navegador') }}:</div>
                                                <div class="col-sm-8 col-form-label text-dark">
                                                    <i class="{{$this->user->last_session->browser_icon}}"></i> 
                                                    {{ $this->user->last_session->browser }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-form-label text-right">{{ __('IP') }}:</div>
                                                <div class="col-sm-8 col-form-label text-dark">
                                                    <i class="fa fa-location-arrow"></i> 
                                                    {{ $this->user->last_session->ip_address }}
                                                </div>
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-sm-12 col-form-label text-center text-muted">{{ __('Nehuma sessão registada!') }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-2">
                                    <h6 class="mb-0">
                                        <button class="collapsed btn btn-warning btn-block btn-rounded" data-toggle="collapse" href="#edit-profile" aria-expanded="false" aria-controls="edit-profile">
                                        {{ __('Editar Perfil') }}
                                        </button>
                                    </h6>
                                </div>
                                <div id="edit-profile" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        If while signing in to your account you see an error message, you can do the following
                                        <ol class="pl-3 mt-4">
                                        <li>Check your network connection and try again</li>
                                        <li>Make sure your account credentials are correct while signing in</li>
                                        <li>Check whether your account is accessible in your region</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-2">
                                    <h6 class="mb-0">
                                        <button class="collapsed btn btn-danger btn-block btn-rounded" data-toggle="collapse" href="#edit-password" aria-expanded="false" aria-controls="edit-password">
                                        {{ __('Alterar Palavra-passe') }}
                                        </button>
                                    </h6>
                                </div>
                                <div id="edit-password" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        If while signing in to your account you see an error message, you can do the following
                                        <ol class="pl-3 mt-4">
                                        <li>Check your network connection and try again</li>
                                        <li>Make sure your account credentials are correct while signing in</li>
                                        <li>Check whether your account is accessible in your region</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
