<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

/**
 * Class CadastroController
 * @package App\Http\Controllers
 */
class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = Cadastro::paginate();

        return view('cadastro.index', compact('cadastros'))
            ->with('i', (request()->input('page', 1) - 1) * $cadastros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadastro = new Cadastro();
        return view('cadastro.create', compact('cadastro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cadastro::$rules);

        $cadastro = Cadastro::create($request->all());

        return redirect()->route('cadastros.index')
            ->with('success', 'Cadastro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadastro = Cadastro::find($id);

        return view('cadastro.show', compact('cadastro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro = Cadastro::find($id);

        return view('cadastro.edit', compact('cadastro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cadastro $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadastro $cadastro)
    {
        request()->validate(Cadastro::$rules);

        $cadastro->update($request->all());

        return redirect()->route('cadastros.index')
            ->with('success', 'Cadastro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cadastro = Cadastro::find($id)->delete();

        return redirect()->route('cadastros.index')
            ->with('success', 'Cadastro deleted successfully');
    }
}
