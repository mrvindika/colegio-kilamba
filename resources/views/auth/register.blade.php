<x-layouts.app>

    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Definições | Usuários') }} </x-slot>

    <div class="col-md-5 grid-margin stretch-card"> 
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">{{ __('Usuário Administrador') }}</h4>
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
                            <input type="text" id="name" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome" aria-label="Nome" autofocus>
                            @error('name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" id="email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" aria-label="Email">
                            @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Telemovel') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" id="phone" name="phone"  class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Telemovel" aria-label="Telemovel">
                            @error('phone') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
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
                    <div class="form-group">
                        <label for="password_confirmation">{{ __('Confirmar Palavra-passe') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Palavra-passe" aria-label="Palavra-passe">
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-lg btn-rounded">
                            <i class="fas fa-save"></i>
                            {{ __('Guardar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
