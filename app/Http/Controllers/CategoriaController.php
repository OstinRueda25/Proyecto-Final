<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Auth\Events\Validated;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria', compact('categorias'));
    }
    public function createCategory(Request $request)
    {
        $validate = $request->validate([
            'nombre' =>'required|string|max:255',
            'descripcion' =>'required|string|max:255'
        ]);
        Categoria::create($validate);
        return redirect()->route('categoria')->with('status', 'Categoria craeda con exito');
    }

    public function updateCategory(Request $request, $id)
    {
        $validate = $request->validate([
            'nombre' =>'required|string|max:255',
            'descripcion' =>'required|string|max:255'
        ]);
        Categoria::where('id', $id)->update($validate);
        return redirect()->route('categoria')->with('status', 'Categoria actualizado con exito');
        
    }
    public function updateCategoryView($id)
    {
        // Obtener una sola categoría por ID
        $categoria = Categoria::findOrFail($id); // Usar findOrFail para manejar errores si no se encuentra la categoría
        return view('editar_categoria_view', compact('categoria')); // Pasamos el objeto de categoría
    }
    
    public function deleteCategory($id)
    {
        Categoria::destroy($id);
        return redirect()->route('categoria')->with('status', 'Categoria eliminado con exito');
    }
}
