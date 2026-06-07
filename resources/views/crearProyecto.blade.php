<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form id="formulario">
        Nombre: <input type="text" name="nombre" id="nombre">
        Descripcion: <input type="text" name="descripcion" id="descripcion">
        Fecha inicio: <input type="date" name="fecha_inicio" id="fecha_inicio">
        Fecha fin: <input type="date" name="fecha_fin" id="fecha_fin">
        <button type="submit" id="boton">Enviar</button>
    </form>
    <a href="/dashboard">← Volver al listado</a>
    <script src="/js/crear.js"></script>
</body>
</html>