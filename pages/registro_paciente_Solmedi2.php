<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
          crossorigin="anonymous">
        <link rel="shorcut icon" type="image/x-icon" href="../assets/img/pestaña.JPG"> 
        <link rel="stylesheet" href="../assets/css/estilos_registro.css"> 
        <title>Solmedi</title>
    </head>

    <body>
      <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../pages/inicio_Solmedi.html">SOLMEDI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Usuario
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="">Cerrar Sesion</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
        </div>
      </nav>

      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 350px; height: 900px;" id="div2">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="100"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">SOLMEDI</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-5">
          <li class="nav-item">
            <a href="#" class="nav-link " aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Configuracion
            </a>
          </li>

          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Usuario
            </a>
          </li>
              
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Seguridad
            </a>
          </li>
              
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Consultas
            </a>
          </li>
          
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Customers
            </a>
          </li>

        </ul>

        <hr>
        
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="#" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Usuario</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="../../Proyecto/index.html">Cerrar sesion</a></li>
          </ul>
        </div>
      </div>

      <div id="div1">
        <form class="row g-3" action="../php/registro_datos.php"  method="POST">
          <div class="col-md-2">
            <label class="form-label" >Tipo de documento</label>
            <select class="form-select" name="docu" required>
              <option selected>seleccione el tipo de documento</option>
             <!--option>Hombre</option>
              <option>Mujer</option>
              <option>Otro</option>
            asdadadasdadsasdasdasdasdadadasd-->
                <?php 
                  include 'Database.php';
                  $tipo = "SELECT * FROM tipo_doc order by id_doc";
                  $tipo2 = mysqli_query($tipo);

                  while($row = mysqli_fetch_array($tipo2)){
                    $id_doc = $row['id_doc'];
                    $doc = $row['documento'];
                  ?>
                  <option value = "<?php echo $doc;?>"><?php echo $doc; ?></option>
                  <?php
                  } 
                ?> 
            </select>
          </div>

          <div class="col-md-2">
            <label for="inputAddress" class="form-label" required>Documento del paciente</label>
            <input type="number" class="form-control" id="inputAddress" placeholder="Numero de documento" name="numdoc" required>
          </div>

          <div class="col-md-2">
            <label for="id" class="form-label">Nombres paciente</label>
            <input type="text" class="form-control" id="Id" name="nom" required >
          </div>

          <div class="col-md-2">
            <label for="Usuario" class="form-label">Apellidos paciente</label>
            <input type="text" class="form-control" id="inputUser" name="apell" required>
          </div>

          <div class="col-md-2">
            <label for="inputState" class="form-label">Genero</label>
            <select id="inputState" class="form-select" name="gen" required>
              <option selected>Seleccionar genero</option>
              <option>Hombre</option>
              <option>Mujer</option>
              <option>Otro</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="inputCity" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="inputCity" name="naci" required>
          </div>

          <div class="col-md-2">
              <label for="inputAddress" class="form-label">telefono paciente</label>
              <input type="number" class="form-control" id="inputAddress" name="tel" required>
          </div>

          <div class="col-md-2">
              <label for="direccion" class="form-label" required>Dirección paciente</label>
              <input type="text" class="form-control" id="inputDireccion" name="direc" required>
          </div>

          <div class="col-md-4">
              <label required="" for="inputState" class="form-label">EPS</label>
              <select id="inputState" class="form-select" name="eps" required>
                <option selected>Seleccionar una EPS</option>
                <option required>Famisanar</option>
                <option required>Compensar</option>
                <option required>Nuevaeps</option>
              </select>
            </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Acepto politica de tratamiento de datos
                </label>
              </div>
            </div>

            <div class="col-12">
              <input class="btn btn-outline-dark" type="submit" value="Siguiente">
                <!--<a class="btn btn-outline-dark" href="../../Proyecto/pages/registro_datos_Solmedi.html">Siguiente</a>-->
                <!--<button type="button" class="btn btn-outline-dark" href="../../Proyecto/pages/recuperar_Solmedi.html">Siguiente</button>-->
                <button type="button" class="btn btn-outline-dark">Actualizar</button>
                <button type="button" class="btn btn-outline-dark">Consultar</button>
            </div>
        </form>
      </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
    </body>
</html>