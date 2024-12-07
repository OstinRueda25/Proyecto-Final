<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/estilo.css')}}">
    <title>Agregar proveedor</title>
</head>
<body>
    <a href="{{route('home')}}">
        <section>
            <h2>Crear Producto</h2>
        </section>
    </a>

    <form action="{{route('add_proveedor')}}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="name Proveedor">
        <input type="text" name="direccion" placeholder="direccion">
        <input type="tel" name="telefono" placeholder="telefono">
        <input type="email" name="correo" placeholder="correo">
        <input type="tel" name="contacto" placeholder="contacto">
        <textarea name="descripcion" cols="30" rows="10">

        </textarea>
        <input type="submit" value="Crear Proveedor">
    </form>
    @if (@session('status'))
    
        <h2> {{session('status')}}</h2>
    @endif
    <h2>list proveedores</h2>
    <table>
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>correo</th>
            <th>contacto</th>
            <th>descripcion</th>
        </thead>
        <tbody>
            @foreach ( $proveedores as $proveedor )
                <tr>
                    <td>{{$proveedor->id}}</td>
                    <td>{{$proveedor->Nombre}}</td>
                    <td>{{$proveedor->Direccion}}</td>
                    <td>{{$proveedor->Telefono}}</td>
                    <td>{{$proveedor->Correo}}</td>
                    <td>{{$proveedor->Contacto}}</td>
                    <td>{{$proveedor->Descripcion}}</td>
                    <td><a href="{{route('editar_proveedor_view', $proveedor->id)}}"> Edit </a></td>
                    <td><a href="{{route('eliminar_proveedor', $proveedor->id)}}"> Delete </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>