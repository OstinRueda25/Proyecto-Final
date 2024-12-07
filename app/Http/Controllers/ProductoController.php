<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\services\CategoryService;
use App\services\ProductService;
use App\services\ProveedorService;

class ProductoController extends Controller
{

    public function index(ProductService $product, CategoryService $categoria, ProveedorService $proveedor)
    {
        
        $productos = $product->getProductos();
        $categorias = $categoria->getCategoria();
        $proveedores = $proveedor->getProveedor();

        return view('home', [
            'productos' => $productos,     // Uso correcto de `=>`
            'categorias' => $categorias,   // Uso correcto de `=>`
            'proveedores' => $proveedores // Uso correcto de `=>`
        ]);

    }
    public function createProducto(Request $request, )
    {
        $validate = $request->validate([
            'Nombre' =>'required|string|max:255',
            'precio' => 'required',
            'cantidad' => 'required',
            'id_categoria' => 'required',
            'id_proveedor' =>'required'
        ]);
        Producto::create($validate);
        return redirect()->route('home')->with('status', 'Categoria craeda con exito');
    }
    public function updateProducto(Request $request, $id)
    {
        $validate = $request->validate([
            'nombre' =>'required|string|max:255',
            'precio' => 'required',
            'cantidad' => 'required',
            'id_categoria' => 'required|nuemric',
            'id_proveedor' =>'required|numeric'
        ]);
        Producto::where('id', $request->id)->update($validate);
        return redirect()->route('home')->with('status', 'Producto actualizado con exito');
        
    }
    public function updateCategoryView($id)
    {
       $productos = Producto::find($id);
       return view('editar_producto_view', compact('productos'));
        
    }

    public function deleteProducto($id)
    {
        Producto::destroy($id);
    }

}
