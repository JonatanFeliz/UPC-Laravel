<x-layouts.app title="Torneos">
<x-layouts.navigation/>
<div class="container">
    <div class="row justify-content-center mt-5">
        
        <form action="{{url('/tournament')}}" method="post" style="width: 500px" class="border border-dark p-4 border-2 rounded-3">
            <h2 class="text-center pb-2">Crear Torneo</h2>
            @csrf
        
            <label for="Name" class="form-label">Nombre</label>
            <input type="text" name="Name" id="Name" value="" class="form-control">
        
            <label class="mt-3" for="Name" class="form-label">Fecha</label>
            <input type="date" name="tournament_date" id="tournament_date" value="" class="form-control">
        
            
            <input type="submit" value="Guardar Datos" class="btn btn-success mt-3">
            <a href="{{route('tournament.index')}}" class="btn btn-danger mt-3 ">Volver</a>
        </form>
        
    </div>
</div>


</x-layouts.app>
