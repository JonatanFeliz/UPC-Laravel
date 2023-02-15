<label for="Name" >Nombre:</label>
<input type="text" name="Name" id="Name" value="{{$tournament->name}}" class="form-control">

<label class="mt-3" for="Name">Fecha:</label>
<input type="date" name="tournament_date" id="tournament_date" value="{{$tournament->tournament_date}}" class="form-control">

<input type="submit" value="Guardar Datos" class="btn btn-success mt-3">
<a href="{{route('tournament.index')}}" class="btn btn-danger mt-3 ">Volver</a>
