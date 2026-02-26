<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.assets', ['head'=> true])
    </head>
    <body id="auth">
        {{-- CONTAINER SCROLLER --}}
        <div class="container-scroller">
            {{-- NAVBAR --}}
            @include('layouts.navbar')
            
            {{-- CONTAINER FLUID --}}
            <div class="container-fluid page-body-wrapper">                                                                                                                                                                                                                
                {{-- SIDEBAR --}}
                @include('layouts.sidebar')
                
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title">
                                <i class="fa fa-home"></i> 
                                {{ $header }}
                            </h3>
                        </div>

                        {{-- MAIN CONTENT --}}
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.assets', ['head'=> false])
    </body>
</html>
