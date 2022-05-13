<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use Illuminate\Http\Request;

/**
 * Class TipoUsuarioController
 * @package App\Http\Controllers
 */
class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoUsuarios = TipoUsuario::paginate();

        return view('tipo-usuario.index', compact('tipoUsuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoUsuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoUsuario = new TipoUsuario();
        return view('tipo-usuario.create', compact('tipoUsuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoUsuario::$rules);

        $tipoUsuario = TipoUsuario::create($request->all());

        return redirect()->route('tipo-usuarios.index')
            ->with('success', 'TipoUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        return view('tipo-usuario.show', compact('tipoUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        return view('tipo-usuario.edit', compact('tipoUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoUsuario $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoUsuario $tipoUsuario)
    {
        request()->validate(TipoUsuario::$rules);

        $tipoUsuario->update($request->all());

        return redirect()->route('tipo-usuarios.index')
            ->with('success', 'TipoUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoUsuario = TipoUsuario::find($id)->delete();

        return redirect()->route('tipo-usuarios.index')
            ->with('success', 'TipoUsuario deleted successfully');
    }
}
