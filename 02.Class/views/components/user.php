<i class="fas fa-users"></i>
<h1 class="cover-heading">Administrar usuarios</h1>
<button type="button" class="btn btn-primary btn-block mb-3 bt-3" data-toggle="modal" data-target="#ModalNewUser">
  Nuevo usuario
</button>
<table class="table text-white">

    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Contraseña</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $ListUser = new UserControllers();
            $ListUser -> ListUsersController(); 
        ?>
    </tbody>

</table>

<!-- Modal -->
<div class="modal fade" id="ModalNewUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body">
            <div class="row">

              <div class="col-md-12">
                <h5 class="text-dark text-left">Ingresa tu nombre: </h5>
                <input name="IUName" type="text" class="form-control" placeholder="Nombre">
              </div>

              <div class="col-md-12 mt-3">
                <h5 class="text-dark text-left">Ingresa tu contraseña</h5>
                <input name="IUPassword" type="password" class="form-control" placeholder="Contraseña">
              </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php 
  $InsertUser = new UserControllers();
  $InsertUser -> InsertUserController();
?>