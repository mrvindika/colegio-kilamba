<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.assets', ['head'=> true])
    </head>
    <body id="guest">
        {{-- CONTAINER SCROLLER --}}
        <div class="container-scroller">
            {{-- NAVBAR --}}
            @include('layouts.navbar')
            
            {{-- CONTAINER FLUID --}}
            <div class="container-fluid page-body-wrapper">
                 <div class="content-wrapper">
                    <div class="row justify-content-center">
                        {{-- MAIN CONTENT --}}
                        {{ $slot }}
                    </div>
                </div>                                                                                                                                                                                                                
            </div>
        </div>
        
        @include('layouts.assets', ['head'=> false])
    </body>
</html>
