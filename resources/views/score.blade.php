<x-layouts.app title="Puntuacion">

    <x-layouts.navigation/>
    <section style="height: 100%;">
        <div class="bg-image h-100">
          <div class="mask d-flex align-items-center h-100">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="card shadow-2-strong">
                    <div class="card-body p-0">
                      <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative;">
                        <table class="table table-dark mb-0">
                          <thead style="background-color: #393939; top: 0; position: sticky;">
                            <tr class="text-uppercase text-success">
                              <th scope="col">Jugador</th>
                              <th scope="col">Puntuacion</th>
                              <th scope="col">Nivel</th>
                              <th scope="col">Partidas</th>
                              <th scope="col">Spots</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Lunatico_07</td>
                              <td>5000</td>
                              <td>88</td>
                              <td>224</td>
                              <td>10</td>
                            </tr>
                            <tr>
                              <td>Nebulosa_AZUL</td>
                              <td>4900</td>
                              <td>85</td>
                              <td>245</td>
                              <td>15</td>
                            </tr>
                            <tr>
                              <td>Dulce_Sueño23</td>
                              <td>4800</td>
                              <td>89</td>
                              <td>210</td>
                              <td>10</td>
                            </tr>
                            <tr>
                              <td>Estrella_Brillante</td>
                              <td>4700</td>
                              <td>80</td>
                              <td>232</td>
                              <td>15</td>
                            </tr>
                            <tr>
                              <td>Aventurero_digital</td>
                              <td>4600</td>
                              <td>78</td>
                              <td>249</td>
                              <td>10</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container mt-4">
            <button type="button" class="btn btn-success">Crear</button>
            <button type="button" class="btn btn-primary">Modificar</button>
            <button type="button" class="btn btn-danger">Borrar</button>


        </div>
      </section>
    <x-layouts.footer/>
</x-layouts.app>



