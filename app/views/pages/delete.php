<div class="container">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Borrar Usuario</span>
        <form action="<?php echo RUTA_URL; ?>/pages/delete/<?php echo $data['id_user']; ?>" method="post">
          <div class="input-field col s12 m6">
            <input disabled name="name" id="name" type="text" class="validate" value="<?php echo $data['name']; ?>">
            <label for="name">Nombre</label>
          </div>
          <div class="input-field col s12 m6">
            <input disabled name="email" id="email" type="text" class="validate" value="<?php echo $data['email']; ?>">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12 m6">
            <input disabled name="phone" id="telefono" type="text" class="validate" value="<?php echo $data['phone']; ?>">
            <label for="telefono">Teléfono</label>
          </div>
          <div class="row">
            <button class="waves-effect waves-light btn" value="submit">Borrar Usuario</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>