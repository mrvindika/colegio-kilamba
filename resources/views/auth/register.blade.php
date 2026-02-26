<x-guest-layout>

    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Definições | Administrador') }} </x-slot>

    {{---------------------------------------BEGIN MAIN CONTENT -----------------------------------------}}
    <div class="col-md-5 grid-margin stretch-card"> 
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">{{ __('Novo Administrador') }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" autocomplete autocorrect spellcheck="true">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Nome') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="name" name="name"  class="form-control @error('name') is-invalid @enderror" placeholder="Nome" aria-label="Nome">
                            @error('name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Usuário') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-lock"></i></span>
                            </div>
                            <input type="email" id="email" name="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Email ou Telemovel" aria-label="Email ou Telemovel">
                            @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Senha') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" name="password"  class="form-control @error('name') is-invalid @enderror" placeholder="Senha" aria-label="Senha">
                            @error('password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{ __('Confirmar senha') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar senha" aria-label="Confirmar senha">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            {{ __('Cadastrar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{---------------------------------------END MAIN CONTENT -------------------------------------------}}

</x-guest-layout>
