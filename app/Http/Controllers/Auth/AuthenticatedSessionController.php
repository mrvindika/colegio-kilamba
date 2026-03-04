<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the dashboard view.
     */
    public function dashboard(): View
    {
        return view('dashboard');
    }

    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }


    /**
     * Handle an incoming authentication request. LoginRequest
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the welcome view.
     */
    public function welcome()
    {

        // GALLERY
        $gallery= [
            [
                'img_src'=> '../../images/samples/300x300/1.jpg',
                'title'=> 'Director',
                'description'=> 'Mateus Victorino Kupesala'
            ],
                [
                'img_src'=> '../../images/samples/300x300/2.jpg',
                'title'=> 'Pedagógico',
                'description'=> 'Justino Kataleco'
            ],
                [
                'img_src'=> '../../images/samples/300x300/3.jpg',
                'title'=> 'Administrativo',
                'description'=> 'Francisco Malembo'
            ],
                [
                'img_src'=> '../../images/samples/300x300/4.jpg',
                'title'=> 'Secretário',
                'description'=> 'Mauro Mateus'
            ],
        ];

        $about= [
            'title'=> 'Colégio BLA Nº 4013 - Kilamba do Cubal',
            'about'=> 
                'É uma Instituição pública angolana dedicada ao Ensino básico, da 7ª à 9ª classe. 
                Este portal é uma inovação tecnológica que visa facilitar a Gestão de recursos 
                humanos e processo de ensino-aprendizagem desta instituição. Nossa meta é 
                transformar o potencial de cada aluno em excelência académica e humana.',
            'location'=> 'Estamos localizados no bairro Camunda, Município do Cubal, Província de Benguela.',
        ];

        return view('welcome', compact('gallery', 'about'));
    }
}
