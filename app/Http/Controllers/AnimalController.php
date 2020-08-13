<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\AnimalType;
use App\Models\Customer;



class AnimalController extends Controller
{
    /**
     * @var \App\Models\Animal
    */
    protected $animal;

    public function __construct(Animal $animal, AnimalType $animalType, Customer $customer)
    {
        $this->animal     = $animal;
        $this->animalType = $animalType;
        $this->customer   = $customer;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = $this->animal->paginate(10);
        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animalTypes = $this->animalType->all();
        $customers   = $this->customer->all();
        return view('animals.create', compact('animalTypes', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->animal->fill($request->all());
        $this->animal->save();
        return redirect()->route('animals.index')->withSuccess('Salvo com sucesso');;
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
        $animalTypes = $this->animalType->all();
        $customers   = $this->customer->all();
        $animal      = $this->animal->findOrFail($id);
        return view('animals.edit', compact('animal', 'animalTypes', 'customers'));
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

        $animal = $this->animal->findOrFail($id);
        $animal->fill($request->all());
        $animal->save();
        return redirect()->route('animals.index')->withSuccess('Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = $this->animal->findOrFail($id);
        $animal->delete();

        return redirect()->route('animals.index')->withSuccess('Deletado com sucesso');;
    }
}
