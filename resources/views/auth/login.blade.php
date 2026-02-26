<x-guest-layout>

    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Login') }} </x-slot>

    {{---------------------------------------BEGIN MAIN CONTENT -----------------------------------------}}
    <div class="col-md-5 grid-margin stretch-card"> 
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">{{ __('Login') }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('Usuário') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-lock"></i></span>
                            </div>
                            <input type="text" id="email" name="email"  class="form-control" placeholder="Email ou Telemovel" aria-label="Email ou Telemovel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Senha') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" name="password"  class="form-control" placeholder="Senha" aria-label="Senha">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-door-open"></i>
                            {{ __('Entrar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{---------------------------------------END MAIN CONTENT -------------------------------------------}}

</x-guest-layout>
