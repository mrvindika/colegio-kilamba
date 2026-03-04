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

        {{-- GENERAL STYLES --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/iconfonts/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/vendor.bundle.addons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css') }}">

        {{-- SPECIFIC STYLES --}}
        {{ $styles?? null }}
    </head>
    <body id="{{ Auth::user()? 'auth-page': 'guest-page'}}">
        {{-- CONTENT PAGE --}}
        <div class="container-scroller">                                                                                                                                                                                                                
            {{-- NAVBAR --}}
            <x-layouts.navbar> </x-layouts.navbar>

            <div class="container-fluid page-body-wrapper">
                {{-- MAIN CONTENT --}}
                @auth
                    {{-- SIDEBAR --}}
                   <x-layouts.sidebar> </x-layouts.sidebar>

                    <div class="main-panel">
                        <div class="content-wrapper">
                            <div class="page-header">
                                <h3 class="page-title">
                                    <i class="fa fa-home"></i> 
                                    {{ $header }}
                                </h3>
                            </div>
                            {{ $slot }}
                        </div>

                        {{-- FOOTER --}}
                        <x-layouts.footer> </x-layouts.footer>
                    </div>

                    @else
                        <div class="content-wrapper">
                            <div class="row justify-content-center">
                                {{ $slot }}
                            </div>
                        </div>  
                @endauth
            </div>
        </div>

        {{-- GENERAL SCRIPTS --}}
        @livewireScripts
        <script type="text/javascript" src="{{ asset('theme/js/vendor.bundle.base.js') }}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor.bundle.addons.js') }}" charset="UTF-8"></script>

        <script type="text/javascript" src="{{ asset('theme/js/off-canvas.js') }}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('theme/js/hoverable-collapse.js') }}" charset="UTF-8"></script>  
        <script type="text/javascript" src="{{ asset('theme/js/misc.js') }}" charset="UTF-8"></script>
 
        {{-- SPECIFIC SCRIPTS --}}
        {{ $scripts?? null }}
    </body>
</html>
