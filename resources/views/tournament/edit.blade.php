<x-layouts.app title="Torneos">
<x-layouts.navigation/>
<div class="container">
    <div class="row justify-content-center mt-5">
        <form action="{{url('/tournament/'.$tournament->id)}}" method="post" style="width: 500px" class="border border-dark p-4 border-2 rounded-3">
            <h2 class="text-center pb-2">Editar Torneo</h2>
            @csrf
            {{method_field('PATCH')}}
            @include('tournament.form')
        </form>
    </div>
</div>
</x-layouts.app>