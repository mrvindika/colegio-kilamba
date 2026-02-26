<x-app-layout>

    {{-- TITLE --}}
    <x-slot name="title"> {{ __('Dashboard') }} </x-slot>

    {{-- HEADER --}}
    <x-slot name="header"> {{ __('Dashboard') }} </x-slot>

    {{---------------------------------------BEGIN MAIN CONTENT -----------------------------------------}}
    {{-- INFO CARDS --}}
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-chalkboard-teacher mr-2"></i>
                                Docentes
                                {{-- {{ now()->translatedFormat('l, d \d\e F \d\e Y') }} --}}
                            </p>
                            <h2>56</h2>
                            <label class="badge badge-outline-danger badge-pill"> Reduziu 30%</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-users mr-2"></i>
                                Administrativos
                            </p>
                            <h2>43</h2>
                            <label class="badge badge-outline-success badge-pill">Aumentou 12%</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fa fa-chalkboard mr-2"></i>
                                Turmas
                            </p>
                            <h2>29</h2>
                            <label class="badge badge-outline-success badge-pill"> Aumentou 2.7%</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-graduation-cap mr-2"></i>
                                Matriculados
                            </p>
                            <h2>1300</h2>
                            <label class="badge badge-outline-success badge-pill">Aumentou 17%</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-book-reader mr-2"></i>
                                Avaliados
                            </p>
                            <h2>123</h2>
                            <label class="badge badge-outline-success badge-pill">Aumentou 10%</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-tasks mr-2"></i>
                                Aprovados
                            </p>
                            <h2>898</h2>
                            <label class="badge badge-outline-danger badge-pill">Reduziu 16%</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CHART CARDS 1 --}}
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-chart-line"></i>Ultimas Matrículas
                    </h4>
                    <canvas id="grafico-ultimas-matriculas"></canvas>
                    <div id="grafico-ultimas-matriculas-legend" class="grafico-ultimas-matriculas-legend"></div>                  
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-chart-line"></i>Ultimos Aproveitamentos 
                    </h4>
                    <canvas id="grafico-ultimos-aproveitamentos"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- CHART CARDS 2 --}}
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-chart-line"></i> Actual Matrícula
                    </h4>
                    <canvas id="grafico-matricula-actual"></canvas>                  
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-chart-line"></i>Actual Aproveitamento 
                    </h4>
                    <canvas id="grafico-aproveitamento-actual"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{---------------------------------------END MAIN CONTENT -------------------------------------------}}

    {{-- SCRIPTS --}}
    <x-slot name="scripts">
        <script type="text/javascript" src="{{ asset('libraries/js/dashboard.js') }}" charset="UTF-8"></script>
    </x-slot>
    
</x-app-layout>