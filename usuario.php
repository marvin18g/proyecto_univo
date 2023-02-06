
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Usuarios</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Marvin ui </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuracion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Usuarios</a></li>
            <li><a class="dropdown-item" href="#">Permisos</a></li>

            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#">Empresas</a></li>
            <li><a class="dropdown-item" href="#">Sucursales</a></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Salir</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<br>


<div class="container">

<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Agregar Usuario
</button>
<br>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="mb-3">
               
               <label for="recipient-name" class="col-form-label">ID:</label>
               <input type="email" class="form-control" name="name" required id="recipient-name">

               
              
             </div>


         <div class="mb-3">
               
                <label for="recipient-name" class="col-form-label">Nombre:</label>
                <input type="email" class="form-control" name="name" required id="recipient-name">

                
               
              </div>

              <div class="mb-3">
               
               <label for="recipient-name" class="col-form-label">Email:</label>
               <input type="email" class="form-control" name="apell" required id="recipient-name">

               
              
             </div>

             <div class="mb-3">
               
               <label for="recipient-name" class="col-form-label">Telefono:</label>
               <input type="email" class="form-control" name="email" required id="recipient-name">

               
              
             </div>

             <div class="mb-3">
               
               <label for="recipient-name" class="col-form-label">Direccion:</label>
               <input type="email" class="form-control" name="email" required id="recipient-name">

               
              
             </div>
             <div class="mb-3">
               
               <label for="recipient-name" class="col-form-label">Acciones:</label>
               <input type="email" class="form-control" name="email" required id="recipient-name">

               
              
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<table class="table table-light">

<br>
<tbody>

  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>EMAIL</td>
    <td>TELEFONO</td>
    <td>DIRECCION</td>
    <td>ACCIONES</td>

  </tr>
</tbody>
  
</div>

</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>