<x-guest-layout>

    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Seja bem-vindo') }} </x-slot>

    {{---------------------------------------BEGIN MAIN CONTENT -----------------------------------------}}
    <div class="col-md-10 grid-margin stretch-card"> 
        <div class="card-body">
            <div class="row">
                <h4 class="card-title">🎓 Bem-vindo ao Colégio Kilamba do Cubal</h4>
            </div>
            {{-- GALLERY --}}
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row portfolio-grid">
                                    {{-- BLOCK 1 --}}
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/1.jpg" alt="image">
                                        <figcaption>
                                            <h4>Director</h4>
                                            <p>Mateus Victorino Kupesala</p>
                                        </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/2.jpg" alt="image">
                                        <figcaption>
                                            <h4>Pedagógico</h4>
                                            <p>Justino Kataleco</p>
                                        </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/3.jpg" alt="image">
                                        <figcaption>
                                            <h4>Administrativo</h4>
                                            <p>Francisco Malembo</p>
                                        </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/4.jpg" alt="image">
                                        <figcaption>
                                            <h4>Secretário</h4>
                                            <p>Mauro Mateus</p>
                                        </figcaption>
                                        </figure>
                                    </div> 
                                        
                                    {{-- BLOCK 2 --}}
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/5.jpg" alt="image">
                                        <figcaption>
                                            <h4>Finalistas</h4>
                                            <p>Estudantes Finalistas 2025/26</p>
                                        </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/6.jpg" alt="image">
                                        <figcaption>
                                            <h4>Limpeza</h4>
                                            <p>Campanha de limpeza 2026</p>
                                        </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/7.jpg" alt="image">
                                        <figcaption>
                                            <h4>Desparasitação</h4>
                                            <p>Campanha de desparasitação 2026</p>
                                        </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                        <figure class="effect-text-in">
                                        <img src="../../images/samples/300x300/8.jpg" alt="image">
                                        <figcaption>
                                            <h4>Exames</h4>
                                            <p>Exames finais 2025/26</p> 
                                        </figcaption>
                                        </figure>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ABOUT --}}
            <div class="row">
                <div class="col-12">
                    <h5 class="card-title">✨ O que somos?</h5>  
                    <p class="text-justify">
                        Somos uma instituição de ensino dedicada a transformar o potencial de cada aluno em excelência 
                        académica e humana. No Colégio Kilamba do Cubal, acreditamos que a educação vai além dos livros; 
                        formamos cidadãos críticos, éticos e preparados para os desafios do futuro, num ambiente familiar
                        e seguro que valoriza as raízes da nossa comunidade.
                    </p>

                    <h5 class="card-title">📍 Onde estamos?</h5>
                    <p class="text-justify">
                        A nossa instituição está localizada no Município do Cubal, Província de Benguela. Desenhámos as nossas instalações
                        para oferecer um espaço modesto e inspirador, propício à aprendizagem e ao convívio. Visita-nos
                        para conheceres as nossas salas de aula e áreas de lazer!
                    </p>
                    <p class="text-justify">
                        Morada: Bairro Camunda | Cubal | Benguela.
                    </p>

                    <h5 class="card-title">🎯 Nossa meta?</h5>
                    <p class="text-justify">
                        Proporcionar um ensino básico de qualidade que combine inovação
                        pedagógica com valores sólidos. Queremos ser a base onde os teus sonhos ganham forma,
                        garantindo que cada estudante saia das nossas portas pronto para contribuir 
                        positivamente para o desenvolvimento de Angola e do mundo.
                    </p>
                </div> 
            </div>
        </div>
    </div>
    {{---------------------------------------END MAIN CONTENT -------------------------------------------}}
    
</x-guest-layout>