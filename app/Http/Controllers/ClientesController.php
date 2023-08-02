<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente();

        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(Cliente::$rules);

        $data = request()->except('_token');


        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }


        // Obtener la fecha y hora actual
        $now = Carbon::now();

        // Asignar la fecha de creación al atributo 'created_at'
        $data['created_at'] = $now;

        // Crear el nuevo cliente y guardar en la base de datos
        $cliente = Cliente::create($data);


        return redirect()->route('clientes.index')
            ->with('success', 'Cliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Cliente::$rules);

        $data = request()->except('_token');


        if ($request->hasFile('imagen')) {

            $cliente = Cliente::findOrFail($id);
            Storage::delete('public/' . $cliente->imagen);

            $data['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }




        $cliente->update($data);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id, Request $request)
    {
        $cliente = Cliente::findOrFail($id);

        if (Storage::delete('public/' . $cliente->imagen)) {
            $cliente = Cliente::find($id)->delete();
        }




        return redirect()->route('clientes.index')
            ->with('success', 'Cliente deleted successfully');
    }
}
