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
        <title>{{ $title?? 'Testing Page'}}</title>

        {{-- ICON --}}
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

        {{-- VITE STYLES --}}
        @vite(['resources/css/app.css'])

        {{-- GENERIC STYLES --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/vendor.bundle.addons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/iconfonts/simple-line-icon/css/simple-line-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/iconfonts/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/iconfonts/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css') }}">
        
        {{-- SPECIFIC STYLES --}}
        {{ $styles?? null }}

        {{-- LIVEWIRE STYLES --}}
        @livewireStyles
    </head>
    <body id="{{ Auth::user()? 'app-page': 'guest-page' }}">
        {{-- CONTENT PAGE --}}
        <div class="container-scroller">                                                                                                                                                                                                                
            {{-- NAVBAR --}}
            <x-layouts.navbar> </x-layouts.navbar>

            {{--CONTAINER --}}
            <div class="container-fluid page-body-wrapper">
                @auth
                    {{-- SIDEBAR --}}
                    <x-layouts.sidebar> </x-layouts.sidebar>
                    <div class="main-panel">
                        <div class="content-wrapper">
                            <div class="page-header">
                                <h3 class="page-title"> 
                                    {{ $title?? 'Testing Page'}}
                                </h3>
                                
                                {{-- NOTIFICATION ALERT --}}
                                <nav aria-label="breadcrumb">
                                    @if (session('alert'))
                                        <div class="alert alert-fill-{{ session('alert.bg')}}" role="alert">
                                            <i class="fa fa-bell"></i>
                                            {!! session('alert.msg') !!}
                                        </div>
                                    @endif
                                </nav>
                            </div>
                            {{ $slot }}
                        </div>
                    </div>
                @else
                    {{ $slot }}
                @endauth
            </div> 
        </div>

        {{-- FOOTER --}}
        <x-layouts.footer> </x-layouts.footer>
        

        {{-- VITE SCRIPTS --}}
        @vite(['resources/js/app.js'])

        {{-- GENERIC SCRIPTS --}}
        <script type="text/javascript" src="{{ asset('theme/js/vendor.bundle.base.js') }}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('theme/js/vendor.bundle.addons.js') }}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{ asset('theme/js/select2.js') }}" charset="UTF-8"></script>
        @auth
            <script type="text/javascript" src="{{ asset('theme/js/off-canvas.js') }}" charset="UTF-8"></script>
            <script type="text/javascript" src="{{ asset('theme/js/hoverable-collapse.js') }}" charset="UTF-8"></script>  
            <script type="text/javascript" src="{{ asset('theme/js/misc.js') }}" charset="UTF-8"></script> 
            <script type="text/javascript" src="{{ asset('theme/js/desktop-notification.js') }}" charset="UTF-8"></script> 
        @endauth

        {{-- SPECIFIC SCRIPTS --}}
        {{ $scripts?? null }}

        {{-- LIVEWIRE SCRIPTS --}}
        @livewireScripts
    </body>
</html>
