<x-layouts.app title="Resultado">

    <x-layouts.navigation/>


    <section>
        @if($result)
            Bien logueado!!
        @else
            Mal logueado!!
        @endif
    </section>

    <x-layouts.footer/>

</x-layouts.app>