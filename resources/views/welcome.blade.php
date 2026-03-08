<x-layouts.app>

    {{-- TITLE --}}
    <x-slot name="title">{{ __('Seja bem-vindo') }}</x-slot>

   <div class="card-body">
        {{-- GALLERY --}}
        <div class="row">
            <h4 class="card-title">{{ __('Seja bem-vindo') }}</h4>
        </div>

        {{-- GALLERY --}}
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row portfolio-grid">
                                {{-- BLOCK 1 --}}
                                @foreach($gallery as $item)
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="{{ $item['img_src'] }}" alt="image">
                                        <figcaption>
                                            <h4>{{__($item['title'])}}</h4>
                                            <p>{{__($item['description'])}}</p>
                                        </figcaption>
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ABOUT --}}
        <div class="row">
            <div class="col-12">
                <h5 class="card-title text-muted">
                    <i class="icon-sm fas fa-graduation-cap"></i>
                    {{ $about['title'] }}
                </h5>  
                <p class="text-justify">{{ __($about['about']) }}</p>
                <p class="text-justify">{{ __($about['location']) }}</p>
            </div> 
        </div>
    </div>
    
</x-layouts.app>