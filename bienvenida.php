<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Artículos</title>
    <style>
        .mensaje-container {
            margin-bottom: 20px;
        }
        .mensaje {
            margin-bottom: 10px;
        }
        button {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- Primer mensaje - Articulos -->
    <div class="mensaje-container">
        <div class="mensaje">Articulos: Contenido Articulo 1</div>
        <button onclick="redireccionar('Articulos/Altas_Articulo.php')">Altas</button>
        <button onclick="redireccionar('Articulos/Bajas_Articulo.php')">Bajas</button>
        <button onclick="redireccionar('Articulos/Actualizar_Articulo.php')">Actualizaciones</button>
    </div>

    <!-- Segundo mensaje - Categoria -->
    <div class="mensaje-container">
        <div class="mensaje">Categoria: Contenido Categoria 1</div>
        <button onclick="redireccionar('Categorias/Altas_categoria.php')">Altas</button>
        <button onclick="redireccionar('Categorias/Bajas_categoria.php')">Bajas</button>
        <button onclick="redireccionar('actualizaciones/actualizacionesCategoria.php')">Actualizaciones</button>
    </div>

    <!-- Tercer mensaje - Donante -->
    <div class="mensaje-container">
        <div class="mensaje">Donante: Contenido Donante 1</div>
        <button onclick="redireccionar('Donantes/Altas_Donante.php')">Altas</button>
        <button onclick="redireccionar('Donantes/Baja_Donante.php')">Bajas</button>
        <button onclick="redireccionar('actualizaciones/actualizacionesDonante.php')">Actualizaciones</button>
    </div>

    <script>
        // Función para redireccionar a otra página
        function redireccionar(url) {
            window.location.href = url;
        }
    </script>

</body>
</html>
