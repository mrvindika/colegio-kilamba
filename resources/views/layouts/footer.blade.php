<footer class="footer">
    <div class="text-muted d-sm-flex justify-content-center justify-content-sm-between">
        {{-- COPYRIGHT --}}
        <span class="text-sm-left d-block d-sm-inline-block">
            Copyright &copy;, 
            {{ config('app.name').('. Todos direitos reservados.')}}
        </span>

        {{-- VERSION --}}
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> 
            {{ __('Versão 1.0') }}
        </span>
    </div>
</footer>