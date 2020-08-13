<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Customer;



class CustomerController extends Controller
{
    /**
     * @var \App\Models\Customer
    */
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = $this->customer->paginate(10);
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['user_id' => Auth::user()->id]);
        $this->customer->fill($request->all());
        $this->customer->save();
        return redirect()->route('customers.index')->withSuccess('Salvo com sucesso');;
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
        $customer = $this->customer->findOrFail($id);
        return view('customers.edit', compact('customer'));
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
        $request->request->add(['user_id' => Auth::user()->id]);
        $customer = $this->customer->findOrFail($id);
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customers.index')->withSuccess('Atualizado com sucesso');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = $this->customer->findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')->withSuccess('Deletado com sucesso');;
    }
}
