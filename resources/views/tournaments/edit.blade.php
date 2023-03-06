<x-layouts.app title="Editar Torneo">
    <x-layouts.navigation/>
    <div class="container">
        <div class="row justify-content-center mt-5">
            
            <form action="{{ route('tournaments.update',$tournament->id) }}" method="POST" style="width: 500px" class="border border-dark p-4 border-2 rounded-3">
                <h2 class="text-center pb-2">Editar Torneo</h2>
                @csrf
                @method('PUT')
            
                <label for="Name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" value="{{$tournament->name}}" class="form-control">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    <br>
                @enderror
            
                <label class="mt-3" for="Name" class="form-label">Fecha</label>
                <input type="date" name="tournament_date" id="tournament_date" value="{{$tournament->tournament_date}}" class="form-control">
                @error('tournament_date')
                    <small class="text-danger">{{ $message }}</small>
                    <br>
                @enderror
            
                
                <input type="submit" value="Guardar Datos" class="btn btn-success mt-3">
                <a href="{{route('tournaments.index')}}" class="btn btn-danger mt-3 ">Volver</a>
            </form>
            
        </div>
    </div>
    
    
    </x-layouts.app>