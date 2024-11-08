<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Productos</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <h1 class="title">Administrar Productos</h1>
    <div class="container">
       <form id="productoForm" class="productoForm">
        <input type="hidden" id="id_producto" name="id_producto" class="productoForm__input">
        <label for="nombre" class="productoForm__label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="productoForm__input" required>
        
        <label for="descripcion" class="productoForm__label">Descripción:</label>
        <textarea id="descripcion" name="descripcion" class="productoForm__textArea"></textarea>
        
        <label for="precio" class="productoForm__label">Precio:</label>
        <input type="number" id="precio" name="precio" class="productoForm__input" required>
        
        <label for="cantidad" class="productoForm__label">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" class="productoForm__input" required>

        <label for="categoria" class="productoForm__label">Categoría:</label>
<select id="categoria" name="categoria" class="productoForm__input" required>
    <option value="">Selecciona una categoría</option>
    <option value="Electrónica">Electrónica</option>
    <option value="Ropa">Ropa</option>
    <option value="Alimentos">Alimentos</option>
</select>

        
        <button type="submit">Guardar</button>
    </form>

        <table id="productosTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Categoría</th> 
                <th>Modificar</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table> 
    </div>
</body>
</html>
