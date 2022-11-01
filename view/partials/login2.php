<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">BioGames</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Iniciar sesion</a>
            </li>
          </ul>
        </div>

        <form class="form-inline" action="php/consultarPedidosXD.php" method="post">
            <input class="form-control mr-sm-2" name="index" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>

    </br>
    </br>
    <center>
        <div style="width: 30%; border: gray 5px solid; padding: 25px; border-radius: 10px;">
            <form action="php/consulta/consult_user_db.php" method="post">
                <h3>Iniciar sesion</h3>
    
                <br>

                <div class="form-group">
                    <label>Nombre de usuario: </label>
                    <input type="text" class="form-control" name="inputUserName" placeholder="Nombre de usuario">
                </div>
    
                <div class="form-group">
                    <label>Contraseña: </label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                </div>

                <div class="form-group">
                    <a href="html/registrarUsuario.html"> Registrar nuevo usuario </a>
                </div>

                <button type="submit" class="btn btn-success">Iniciar sesion</button>
                
            </form>
        </div>

    </center>

    </br>
    </br>

</body>