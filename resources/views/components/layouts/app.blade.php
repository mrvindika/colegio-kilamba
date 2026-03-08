<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- METADATA --}}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ config('app.name', 'Colégio Kilamba do Cubal') }}">
        <meta name="keywords" content="Sistema, Web, Gestão, Escolar, Integrada, Cubal, SGEI">
        <meta name="author" content="UKB">
        <meta name="csrf_token" content="{{ csrf_token() }}">

        {{-- TITLE --}}
        <title>{{ $title?? null }}</title>

        {{-- ICON --}}
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

        {{-- GENERIC STYLES --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/vendor.bundle.addons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/iconfonts/font-awesome/css/all.min.css') }}">

        {{-- LIVEWIRE AND VITE STYLES --}}
        @livewireStyles
        @vite(['resources/css/app.css'])

        {{-- THEME STYLE --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css') }}">

        {{-- SPECIFIC STYLES --}}
        {{ $styles?? null }}
    </head>
    <body id="{{ Auth::user()? 'app-page': 'guest-page' }}">
        
        {{-- CONTENT PAGE --}}
        <div class="container-scroller">                                                                                                                                                                                                                
            {{-- NAVBAR --}}
            <x-layouts.navbar> </x-layouts.navbar>

            <div class="container-fluid page-body-wrapper">
                {{-- SIDEBAR --}}
                @auth
                    <x-layouts.sidebar> </x-layouts.sidebar>
                @endauth
                {{-- MAIN CONTENT --}}
                <div class="main-panel">
                    <div class="content-wrapper">
                        @auth  
                        <div class="page-header">
                            <h3 class="page-title">
                                <i class="fa fa-home"></i> 
                                {{ $header?? null }}
                            </h3>
                        </div>
                        {{ $slot }}
                        @else
                        {{ $slot }}
                        @endauth
                    </div>
                </div> 
            </div> 
        </div>

        {{-- FOOTER --}}
        <x-layouts.footer> </x-layouts.footer>
        

        {{-- GENERIC SCRIPTS --}}
        <script type="text/javascript" src="{{ asset('theme/js/vendor.bundle.base.js') }}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor.bundle.addons.js') }}" charset="UTF-8"></script>
        @auth
        <script type="text/javascript" src="{{ asset('theme/js/off-canvas.js') }}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('theme/js/hoverable-collapse.js') }}" charset="UTF-8"></script>  
        <script type="text/javascript" src="{{ asset('theme/js/misc.js') }}" charset="UTF-8"></script> 
        @endauth

        {{-- LIVEWIRE AND VITE SCRIPTS --}}
        @vite(['resources/js/app.js'])
        @livewireScripts

        {{-- SPECIFIC SCRIPTS --}}
        {{ $scripts?? null }}
    </body>
</html>
