<x-layouts.app title="Torneos">
    <x-layouts.navigation/>
    <section>
        <div class="container text-center">
            <h2 class="mt-5">Torneos</h2>
    
            <div class="row justify-content-center">
    
                <table class="table table-light my-3" style="width: 1000px">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            @role('admin')<th>Acciones</th>@endrole
                        </tr>
                    </thead>
        
                    <tbody>
                        @php($count=1)
                        @foreach ($tournaments as $tournament)
    
    
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$tournament->name}}</td>
                            <td>{{ date('d-m-Y', strtotime($tournament->tournament_date)) }}</td>
                            @role('admin')
                                <td>

                                    <form action="{{ route('tournaments.destroy',$tournament->id) }}" method="POST">
                                    
                                        <a class="btn btn-warning" href="{{ route('tournaments.edit',$tournament->id) }}">Editar</a>

                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    
                                    </form>

                                </td>
                            @endrole
                        </tr>
                        @php($count++)
                        @endforeach
                    </tbody>
                </table>
                
    
            </div>
            @role('admin')<a href="{{route('tournaments.create')}}" class="btn btn-success p-2 my-4">Crear Torneo</a>@endrole
              
        </div>
    
    </section>
    <x-layouts.footer/>
    </x-layouts.app>
    