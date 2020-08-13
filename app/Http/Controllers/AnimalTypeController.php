<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalType;

class AnimalTypeController extends Controller
{
    /**
     * @var \App\Models\AnimalType
    */
    protected $animalType;

    public function __construct(AnimalType $animalType)
    {
        $this->animalType = $animalType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animalTypes = $this->animalType->paginate(10);
        return view('animalTypes.index', compact('animalTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animalTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->animalType->fill($request->all());
        $this->animalType->save();
        return redirect()->route('animalTypes.index')->withSuccess('Salvo com sucesso');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animalType = $this->animalType->findOrFail($id);
        return view('animalTypes.edit', compact('animalType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animalType = $this->animalType->findOrFail($id);
        $animalType->fill($request->all());
        $animalType->save();
        return redirect()->route('animalTypes.index')->withSuccess('Atualizado com sucesso');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animalType = $this->animalType->findOrFail($id);
        $animalType->delete();

        return redirect()->route('animalTypes.index')->withSuccess('Deletado com sucesso');;
    }
}
