<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/estilo.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update_categoria', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Campo para nombre -->
        <input type="text" name="nombre" value="{{ old('nombre', $categoria->Nombre) }}" placeholder="Nombre de la categoría" required>
        
        <!-- Campo para descripción -->
        <textarea name="descripcion" placeholder="Descripción de la categoría" required>{{ old('descripcion', $categoria->Descripcion) }}</textarea>
        
        <input type="submit" value="Actualizar categoría">
    </form>
    
</body>
</html>