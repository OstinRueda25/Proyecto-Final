<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor', compact('proveedores'));
        
    }

    public function createProveedor(Request $request)
    {
        $validate = $request->validate([
            'Nombre' =>'required|string|max:255',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required|email',
            'Contacto' => 'required',
            'Descripcion' =>'required'
        ]);
        Proveedor::create($validate);
        return redirect()->route('proveedor')->with('status', 'Proveedor craedo con exito');
    }
    public function updateProveedor(Request $request, $id)
    {
        $validate = $request->validate([
            'Nombre' =>'required|string|max:255',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required|email',
            'Contacto' => 'required',
            'Descripcion' =>'required'
        ]);
        Proveedor::where('id', $request->id)->update($validate);
        return redirect()->route('proveedor')->with('status', 'Proveedor actualizado con exito');
        
    }

    public function updateProveedorView($id)
    {
       $proveedor = Proveedor::find($id);
       return view('editar_proveedor_view', compact('proveedor'));
        
    }

    public function deleteProveedor($id)
    {
        Proveedor::destroy($id);
        return redirect()->route('proveedor')->with('status', 'Proveedor eliminado con exito');
    }
}
