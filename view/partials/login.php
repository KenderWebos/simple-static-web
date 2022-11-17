<body>
  </br>
  </br>
  <center>
    <div style="width: 30%; border: gray 5px solid; padding: 25px; border-radius: 10px;">
      <form action="view\partials\zz_exito.php" method="post">
        <h3>Iniciar sesion</h3>

        <br>

        <div class="form-group">
          <label>Nombre de usuario: </label>
          <input type="text" class="form-control" name="inputUserName" placeholder="Nombre de usuario" autocomplete="off">
        </div>

        <div class="alert alert-warning" role="alert">
          NO USES CONTRASEÑAS QUE UTILICES EN OTROS SITIOS!! NO NOS HACEMOS RESPONSABLES DE PERDIDAS DE INFORMACION.
        </div>

        <div class="form-group">
          <label>Contraseña: </label>
          <input type="password" class="form-control" name="inputPassword" placeholder="Contraseña" autocomplete="off">
        </div>

        <div class="form-group">
          <a href="index.php?p=/zz_exito"> Registrar nuevo usuario </a>
        </div>

        <div class="d-flex justify-content-center">
					<a href="https://www.google.cl/" target="_blank">Need help?</a>
				</div>

        <button type="submit" class="btn btn-success">Iniciar sesion</button>

      </form>
    </div>

  </center>

  </br>
  </br>

</body>