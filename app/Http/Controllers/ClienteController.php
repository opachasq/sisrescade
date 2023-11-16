<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Cliente;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use function Laravel\Prompts\alert;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos=Genero::get();
        $clientes = Cliente::get();
        return view('clientes.index', compact('generos','clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos=Genero::get();

        return view('clientes.create',compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        
        $cliente = new  Cliente();
        $cliente->dni = request('dni');
        $cliente->nombres = request('nombres');
        $cliente->apellidos = request('apellidos');
        $cliente->celular = request('celular');
        $cliente->correo = request('correo');
        $cliente->direccion = request('direccion');
        $cliente->activo = true;
        $cliente->genero_id = request('genero_id');
        //dd($cliente);
        $cliente->save();
        alert()->success('La Operacion Registrado Correctamente', 'Exito!');

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.index', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->dni = request('dni');
        $cliente->nombres = request('nombres');
        $cliente->apellidos = request('apellidos');
        $cliente->celular = request('celular');
        $cliente->correo = request('correo');
        $cliente->direccion = request('direccion');
        $cliente->activo = true;
        $cliente->genero_id = request('genero_id');
        //dd($cliente);
        $cliente->save();
         alert()->success('Cliente fue actualizado correctamente','Exito!');
         return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        alert()->success('El Cliente Fue Eliminado','Exito!');
        return redirect('clientes');
    }
 /**
     * Dar de Baja al Cliente.
     */
    public function altabaja($estado, $id)
    {
        $cliente = Cliente::findOrFail($id);
        if ($estado == '1') {
            $cliente->activo = '0';
            $cliente->save();
            alert()->success('El cliente fue desactivado','Exito!');
        } else {
            $cliente->activo = '1';
            alert()->success('El cliente fue activado','Exito!');
            $cliente->save();
        }
        return redirect('clientes');
    }
     /**
     * Buscar Cliente en la RENIEC.
     */
    public function buscar(Request $request)
    {

        $dni = trim($request->get('dni'));

        $cliente = Cliente::where('dni', $dni)->first();

        if (is_null($cliente)) {

            $url = "https://unasam.dev/integracion/api/dbu/matriculados/2014-2/dni/".$dni;

            try {
                //code...
                $result = file_get_contents($url);
                $data = json_decode(trim($result), true);

                $data=$data['alumno'];
                session()->flashInput([
                    'dni' =>$data['dni'],
                    'nombres' => $data['nombres'],
                    'id' => null,
                    'apellidos' => $data['apellido_paterno'].' '.$data['apellido_materno']
                ]);

                return redirect()->route('clientes.create')->with('buscar', '');
            } catch (\Throwable $th) {
                //throw $th;
            }

            session()->flashInput([
                'dni' => $dni,
            ]);
            return redirect()->route('clientes.create')->with('buscar', '')->with('errcliente', 'cliente mo encontrado');
        } else {
            session()->flashInput([
                'dni' => $dni,
                'nombres' => $cliente->nombres,
                'id' => $cliente->id,
                'apellidos' => $cliente->apellidos
            ]);
            return redirect()->route('clientes.create')->with('buscar', '');
        }
    }

    public static function RegisterClientesRoutes(){
        Route::resource('/clientes', ClienteController::class);
        Route::get('cliente/altabaja/{estado}/{id}',[ClienteController::class,'altabaja']);
        Route::get('Cliente/buscar',[ClienteController::class,'buscar'])->name('cliente.buscar');
    }
}
