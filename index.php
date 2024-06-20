<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Tabla de productos</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/imagen1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/imagen2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/imagen3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class="container-fluid">
        <header>
            MI PRIMER CRUD
        </header>
        
        <section>
          <div class="alinear">
          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InsertProductoModal" data-bs-whatever="@getbootstrap">Insertar productos</button>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No Producto</th>
                        <th>Nombre de Producto</th>
                        <th>Precio Producto</th>
                        <th>Unidades Producto</th>
                        <th>Descripción Producto</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                        
                    </tr>
                </thead>
                <?php
                include ("conexion.php");
                $query = "SELECT * FROM producto";
                $con=conectar();
                $result = mysqli_query($con, $query);
              
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                echo "<td>" . $row["noProducto"] . "</td>";
                echo "<td>" . $row["nombreProducto"] . "</td>";
                echo "<td>" . $row["precioProducto"] . "</td>";
                echo "<td>" . $row["unidadesProducto"] . "</td>";
                echo "<td>" . $row["descripcionProducto"] . "</td>";
                echo'<td><i class="bi bi-pencil-square edit-btn" data-bs-toggle="modal"
                      data-bs-target="#updateProducto"></i> </td>';//para actualizar
                echo'<td><i class="bi bi-trash delete-btn" data-bs-toggle="modal"
                      data-bs-target="#deleteProducto"></i></td>';//para eliminar
                echo "</tr>";           
                }            
                ?>               
              </table>

        </section>

    
        
        <div class="modal fade" id="InsertProductoModal" tabindex="-1" aria-labelledby="InsertProducto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="InsertProducto">Nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name ="" method="post" action="insertProducto.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">ID Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "noProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "nombreProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Precio Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "precioProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Unidades Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "unidadesProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Descripción Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "descripcionProducto">

          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="updateProducto" tabindex="-1" aria-labelledby="updateProducto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="updateProducto">Actualización Productos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name ="" method="post" action="updateProducto.php">
          <div class="mb-3" style="display:none">
            <label for="recipient-name" class="col-form-label">ID Producto:</label>
            <input type="text" class="form-control" id="update-noProducto" name = "noProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
            <input type="text" class="form-control" id="update-nombreProducto" name = "nombreProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Precio Producto:</label>
            <input type="text" class="form-control" id="update-precioProducto" name = "precioProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Unidades Producto:</label>
            <input type="text" class="form-control" id="update-unidadesProducto" name = "unidadesProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Descripción Producto:</label>
            <input type="text" class="form-control" id="update-descripcionProducto" name = "descripcionProducto">

          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>



          <div class="modal fade" id="deleteProducto" tabindex="-1" aria-labelledby="deleteProducto" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteProducto">¿Deseas eliminar este producto?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form name="" method="post" action="deleteProducto.php">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">ID Producto:</label>
                                <input type="text" class="form-control" id="delete-noProducto" name="noProducto">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                    </form>
                </div>
            </div>
          </div>



<script>
  const editButtons = document.querySelectorAll('.edit-btn');
  const updateProductoModal = document.getElementById('updateProducto');

  const noProductoInput = document.getElementById('update-noProducto');
  const nombreProductoInput = document.getElementById('update-nombreProducto');
  const precioProductoInput = document.getElementById('update-precioProducto');
  const unidadesProductoInput = document.getElementById('update-unidadesProducto');
  const descripcionProductoInput = document.getElementById('update-descripcionProducto');

    editButtons.forEach(button => {
        button.addEventListener('click', event => {
          //Obtener la fila correspondiente al boton de edicion clicado
          const fila = event.currentTarget.closest('tr');
       
          const noProducto = fila.children[0].textContent;
          const nombreProducto = fila.children[1].textContent;
          const precioProducto = fila.children[2].textContent;
          const unidadesProducto = fila.children[3].textContent;
          const descripcionProducto = fila.children[4].textContent;

          //Actualizar campos en la ventana modal con los detalles del producto
          noProductoInput.value = noProducto; 
          nombreProductoInput.value = nombreProducto; 
          precioProductoInput.value = precioProducto; 
          unidadesProductoInput.value = unidadesProducto; 
          descripcionProductoInput.value = descripcionProducto; 

          //Abre la ventana modal
          updateProducto.show();
          
        });
    });
</script>


        <script>
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const deleteProductoModal = document.getElementById('deleteProducto');
        const deleteNoProductoInput = document.getElementById('delete-noProducto');

        deleteProductoModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Botón que activó el modal
            const fila = button.closest('tr'); // Fila correspondiente al botón
            const noProducto = fila.children[0].textContent; // ID del producto

            // Actualizar el valor del campo oculto con el ID del producto
            deleteNoProductoInput.value = noProducto;
        });

        deleteButtons.forEach(button => {
            button.addEventListener('click', event => {
                // Mostrar el modal de eliminación
                deleteProducto.show()
            });
        });
        </script>



        <footer>
          Todos los derechos reservados Abi
        </footer>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>