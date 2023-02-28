<x-layouts.app title="Iniciar Sesion">

  <section class="h-100 position-relative" style="background-image: url('/img/hecker.jpg'); background-repeat: no-repeat;">
    <div class="container">
        <div class="row position-absolute top-50 start-50 translate-middle">
            <div class="col-6" style="background-color: #0E131F">
                <form class="row g-3 p-5" method="post" action="{{ url('login-entry') }}">
                  @csrf
                  <h2 class="text-center" style="color: #5EE4A3">Iniciar Sesión</h2>
                  <div class="col-md-12 form-floating">
                    <input type="text" class="form-control rounded-pill" name="email" id="email" placeholder="> Correo" style="background-color: #0E131F; border-color:#5EE4A3">
                    <label for="email" style="color: #5EE4A3">> Email</label>
                  </div>
                  <div class="col-md-12 form-floating">
                    <input type="text" class="form-control rounded-pill" name="password" id="password" placeholder="> Contraseña" style="background-color: #0E131F; border-color:#5EE4A3">
                    <label for="password" style="color: #5EE4A3">> Contraseña</label>
                  </div>
                  
                  <div class="text-center mb-4">
                      <p class="text-white">Si no tienes cuenta <a href="{{ route('register') }}">Registrate</a></p>
                      <button type="submit" class="btn text-white w-25 rounded-0" style="background-color: #5EE4A3">Entrar</button>
                  </div>


                  <a href="{{ route('home') }}" class="text-center text-decoration-none text-white">Volver a Home</a>
                
                </form>

            </div>
        </div>
    </div>
  </section>

</x-layouts.app>

