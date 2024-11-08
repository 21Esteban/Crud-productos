$(document).ready(function() {
    // Leer productos al cargar la página
    leerProductos();

    // Crear o actualizar producto
    $('#productoForm').on('submit', function(e) {
        e.preventDefault();
        const id = $('#id_producto').val();
        const url = id ? 'http://localhost/Crud-productos/products/update.php' : 'http://localhost/Crud-productos/products/create.php';
        
        $.ajax({
            url: url,
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                console.log("golaaa");
                leerProductos();
                $('#productoForm')[0].reset();
            }
        });
    });

    // Leer productos
    function leerProductos() {
        $.ajax({
            url: 'http://localhost/Crud-productos/products/read.php',
            type: 'GET',
            success: function(response) {
                $('#productosTable tbody').html(response);
            }
        });
    }

    // Eliminar producto
    $(document).on('click', '.btnEliminar', function() {
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/Crud-productos/products/delete.php',
            type: 'POST',
            data: { id: id },
            success: function(response) {
                console.log(response);
                leerProductos();
            }
        });
    });

    $(document).on('click', '.btnEditar', function() {
        const id = $(this).data('id');
        const nombre = $(this).data('nombre');
        const descripcion = $(this).data('descripcion');
        const precio = $(this).data('precio');
        const cantidad = $(this).data('cantidad');
        const categoria = $(this).data('categoria');
    
        // Llenar el formulario con los valores del producto
        $('#id_producto').val(id);
        $('#nombre').val(nombre);
        $('#descripcion').val(descripcion);
        $('#precio').val(precio);
        $('#cantidad').val(cantidad);
        $('#categoria').val(categoria);
    
        // Cambiar el texto del botón de enviar a 'Actualizar'
        $('#productoForm button[type="submit"]').text('Actualizar');
    });
});
