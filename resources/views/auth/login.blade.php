<x-layouts.app>

    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Login') }} </x-slot>
    <div class="content-wrapper" style="max-width: 35em">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="page-title text-center text-danger">{{ __('Login') }}</h4>
            </a>
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
                    <div class="form-group form-check form-check-success">
                        <label class="form-check-label" for="remember">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Lembrar-me') }}<i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info btn-lg btn-rounded">
                            <i class="fas fa-sign-in-alt"></i>
                            {{ __('Entrar') }}
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>    
</x-layouts.app>
