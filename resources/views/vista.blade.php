<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ítems</title>
</head>
<body>
    <h1>Listado de Ítems</h1>

    <ul>
    
            <li>{{ $item->name }}</li>
    
    </ul>

    <h2>Agregar un Nuevo Ítem</h2>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Nombre del Ítem:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Agregar</button>
    </form>
</body>
</html>
