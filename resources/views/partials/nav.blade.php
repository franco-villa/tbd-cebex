


    <thead class="table table-bordered">
      <tr>
        <!-- <th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a></th>  -->
        
          <th scope="col" class="{{ request()->routeIs('home') ? 'activo' : '' }}"><a href="/">Inicio</a></th> 
        <th scope="col" class="{{ request()->routeIs('programas') ? 'activo' : ''}}"><a href="programas">Programas</a></th> 
        <th scope="col" class="{{ request()->routeIs('talleres') ? 'activo' : ''}}"><a href="talleres">Talleres</a></th> 
        <th scope="col" class="{{ request()->routeIs('asesoramiento') ? 'activo' : ''}}"><a href="asesoramiento">Asesoramiento</a></th> 
        <th scope="col" class="{{ request()->routeIs('contacto') ? 'activo' : ''}}"><a href="contacto">Contacto</a></th> 
      </tr>
    </thead>






