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
    <body>
        <a href="{{route('home')}}">
            <section>
                <h2>Crear Producto</h2>
            </section>
        </a>
    
        <form action="{{route('add_categoria')}}" method="post">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre categoría">
            <textarea name="descripcion" cols="30" rows="10"></textarea>
            <input type="submit" value="Crear categoría">
        </form>

        <h2 class="text-xl font-semibold mt-8 mb-4">Lista de Categorías</h2>
        
        <!-- Tabla de Categorías -->
        <table class="min-w-full table-auto bg-white border border-gray-200 shadow-md mx-auto rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-teal-500 text-white">
                    <th class="px-6 py-4 text-left">ID</th>
                    <th class="px-6 py-4 text-left">Nombre</th>
                    <th class="px-6 py-4 text-left">Descripción</th>
                    <th class="px-6 py-4 text-center">Editar</th>
                    <th class="px-6 py-4 text-center">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
    <tr class="border-b hover:bg-gray-100">
        <td class="px-6 py-4">{{ $categoria->id }}</td>
        <td class="px-6 py-4">{{ $categoria->Nombre }}</td>
        <td class="px-6 py-4">{{ $categoria->Descripcion }}</td>
        <td class="px-6 py-4 text-center">
            <!-- Aquí pasas correctamente el id de cada categoría -->
            <a href="{{ route('editar_categoria_view', $categoria->id) }}" class="text-teal-500 hover:text-teal-700">Editar</a>
        </td>
        <td class="px-6 py-4 text-center">
            <a href="{{ route('eliminar_categoria', $categoria->id) }}" class="text-red-500 hover:text-red-700">Eliminar</a>
        </td>
    </tr>
@endforeach

            </tbody>
        </table>

    </body>
</body>
</html>
