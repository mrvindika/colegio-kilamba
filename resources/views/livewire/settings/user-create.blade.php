<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Volt\Component;

new class extends Component 
{
    public string $name='';
    public string $role='';
    public string $email='';
    public string $phone='';
    public string $password='';
    public string $password_confirmation='';

    protected  function rules()
    {
        return [
        'name' => ['filled','string','max:160'],
        'role' => ['filled','string','max:60'],
        'email' => ['filled','string','lowercase','email','max:200','unique:'.User::class],
        'phone' => ['nullable','string','max:80','unique:'.User::class],
        'password' => ['required','string','min:6','max:60','confirmed'],
    ];
    }
    

    public function updated($property)
    {
        $this->validateOnly($property);
    }
    

    public function save()
    {
        $this->validate();

        /* User::create([
            'name'=>$this->name,
            'role'=>$this->role,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'password'=> Hash::make($this->password),
        ]); */

        
        session()->flash('alert',[
            'bg' => 'success',
            'msg' => "<b>Usuário</b> cadastrado com sucesso!"
        ]);

        $this->redirect(route('user.index'), navigate:true);
    }


}; 
?>

<div class="row justify-content-center">
    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Definições: Novo Usuário') }} </x-slot>

    {{-- HEADER --}}
    <x-slot name="header"> {{ __('Cadastrar Usuário') }} </x-slot>


    {{-- CREATE USER #FORM --}}
    <div class="col-md-7 grid-margin stretch-card"> 
        <div class="card">
            <div class="card-header bg-primary">
                <div class="d-flex justify-content-between align-items-between">
                    <button class="btn btn-outline-info btn-rounded" wire:navigate href="{{ route('user.create') }}">
                        <i class="fas fa-users"></i> {{__('Todos')}}
                    </button>
                </div>
                <h4 class="page-title text-center text-danger">{{ __('Novo Usuário') }}</h4>
            </div>
            <div class="card-body" novalidate>
                <form wire:submit="save">
                    <div class="form-group">
                        <label for="name">{{ __('Nome') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="name" wire:model.live="name"  class="form-control @error('name') is-invalid @enderror" placeholder="Nome" aria-label="Nome" autofocus>
                            @error('name') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role">{{ __('Previlégio') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-cog"></i></span>
                            </div>
                            <select id="role" wire:model.live="role" class="form-control select" autocomplete="off">
                                <option value="Operador">Operador</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" id="email" wire:model.live="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email">
                            @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ __('Telemovel') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" id="phone" wire:model.live="phone"  class="form-control @error('phone') is-invalid @enderror" placeholder="Telemovel" aria-label="Telemovel">
                            @error('phone') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Palavra-passe') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" wire:model.live="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Palavra-passe" aria-label="Palavra-passe">
                            @error('password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{ __('Confirmar Palavra-passe') }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password_confirmation" class="form-control" wire:model.live="password_confirmation" placeholder="Palavra-passe" aria-label="Palavra-passe">
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
</div>
