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
                        <th>Acciones</th>
                    </tr>
                </thead>
    
                <tbody>
                    @php($count=1)
                    @foreach ($tournaments as $tournament)


                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$tournament->name}}</td>
                        <td>{{ date('d-m-Y', strtotime($tournament->tournament_date)) }}</td>
                        <td>
                            <a href="{{url('/tournament/'.$tournament->id.'/edit')}}" class="btn btn-warning">
                                Editar
                            </a>
                            |
                            <form class="d-inline" action="{{url('/tournament/'.$tournament->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                {{--@method('DELETE')--}}
                                <input type="submit" value="Borrar" class="btn btn-danger"> {{--onclick="return confirm('Quieres borrar?')"--}}
                            </form>
                        </td>
                    </tr>
                    @php($count++)
                    @endforeach
                </tbody>
            </table>
            

        </div>
        <a href="{{url('tournament/create')}}" class="btn btn-success p-2 my-4">Crear Torneo</a>
          
    </div>

</section>
<x-layouts.footer/>
</x-layouts.app>
