<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
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
        $proyectos = Proyecto::paginate();

        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto = new Proyecto();
        return view('proyecto.create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(Proyecto::$rules);
           
        $data = request()->except('_token');


        if($request->hasFile('imagen')){
            $data['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

    

        $proyecto = Proyecto::insert($data);

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Proyecto::$rules);
        
        $data = request()->except('_token');


        if($request->hasFile('imagen')){

            $proyecto = Proyecto::findOrFail($id);
            Storage::delete('public/'.$proyecto->imagen);

            $data['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

    


        $proyecto->update($data);

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id, Request $request)
    {
            $proyecto = Proyecto::findOrFail($id);

        if(Storage::delete('public/'.$proyecto->imagen)){
            $proyecto = Proyecto::find($id)->delete();
        }
            

       

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
