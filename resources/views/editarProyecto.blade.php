<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Proyecto</h1>
    
    <form id="formulario">
        <input type="hidden" id="id" value="{{ $id }}">
        Nombre: <input type="text" name="nombre" id="nombre">
        Descripcion: <input type="text" name="descripcion" id="descripcion">
        Fecha inicio: <input type="date" name="fecha_inicio" id="fecha_inicio">
        Fecha fin: <input type="date" name="fecha_fin" id="fecha_fin">
        <button type="submit">Actualizar</button>
    </form>
    
    <a href="/dashboard">← Volver al listado</a>
    <script src="/js/editar.js"></script>
</body>
</html>