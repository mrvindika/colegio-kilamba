<x-layouts.app>

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
                            <input type="text" id="email" name="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Email ou Telemovel" aria-label="Email ou Telemovel" autofocus>
                            @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Palavra-passe') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" name="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Palavra-passe" aria-label="Palavra-passe">
                            @error('password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar-me') }}
                            </label>
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

</x-layouts.app>
