<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos Subidos</title>
</head>
<body>

    <h1>Archivos Subidos</h1>

    <table border ="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Tamaño</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->type }}</td>
                    <td>{{ $file->size }} bytes</td>
                    <td>
                        <a href="{{ asset('storage/' . $file->path) }}" target="_blank">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
