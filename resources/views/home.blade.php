<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/estilo.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Documento</title>
</head>
<body>
    <article>
        <a href="{{route('proveedor')}}">
            <section>
                <h2>Crear Proveedor</h2>
            </section>
        </a>
        
        <a href="{{route('categoria')}}">
            <section>
                <h2>Crear Categoría</h2>
             </section>
        </a>
    </article>
    
    <form action="{{route('add_product')}}" method="post">
        <input type="text" name="product" placeholder="Nombre del Producto" required>
        <input type="number" name="price" placeholder="Precio del Producto" required>
        <input type="number" name="stock" placeholder="Cantidad en Inventario" required>
        <select name="" id="">
            <option value="" disabled>Seleccione Categoría</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}" disabled>{{$categoria->nombre}}</option>
            @endforeach
        </select>
        <select name="" id="">
            <option value="" disabled>Seleccione Proveedor</option>
            @foreach ($proveedores as $proveedor)
                <option value="{{$proveedor->id}}" disabled>{{$proveedor->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" value="Agregar Producto">
    </form>

    <table class="min-w-full table-auto text-left">
        <thead class="bg-teal-600 text-white">
            <tr>
                <th class="py-3 px-6 text-center">ID</th>
                <th class="py-3 px-6">Nombre del Producto</th>
                <th class="py-3 px-6">Precio del Producto</th>
                <th class="py-3 px-6">Cantidad</th>
                <th class="py-3 px-6">Fecha de Creación</th>
                <th class="py-3 px-6" colspan="2">ACCIONES</th>
            </tr>
        </thead>
        <tbody class="bg-gray-50">
            @foreach ($productos as $producto)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-6 text-center">{{ $producto->id }}</td>
                    <td class="py-3 px-6">{{ $producto->nombre }}</td>
                    <td class="py-3 px-6">{{ $producto->precio }}</td>
                    <td class="py-3 px-6">{{ $producto->stock }}</td>
                    <td class="py-3 px-6">{{ $producto->created_at->format('Y-m-d H:i:s') }}</td>
                    <td class="py-3 px-6">
                        <a href="{{ route('editar_producto', $producto->id) }}" class="text-teal-600 hover:text-teal-800">
                            Editar
                        </a>
                    </td>
                    <td class="py-3 px-6">
                        <a href="{{ route('eliminar_producto', $producto->id) }}" class="text-red-600 hover:text-red-800">
                            Eliminar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
</body>
</html>
