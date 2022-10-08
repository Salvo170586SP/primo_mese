<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Models\Flight;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passengers = Passenger::paginate(5);
        return view('admin.passengers.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.passengers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Surname' => 'required',
            'Birthday' => 'required',
        ], [
            'Name.required' => 'Il campo del nome è obbligatorio',
            'Surname.required' => 'Il campo del cognome è obbligatorio',
            'Birthday.required' => 'Il campo della data è obbligatorio',
        ]);

        $new_passenger = new Passenger();
        $new_passenger->fill($request->all());
        $new_passenger->save();

        return redirect()->route('admin.passengers.index')->with('success', "Il passeggero $new_passenger->Name $new_passenger->Surname è stato aggiunto");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function show(Passenger $passenger)
    {
        return view('admin.passengers.show', compact('passenger'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function edit(Passenger $passenger)
    {
        return view('admin.passengers.edit', compact('passenger'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passenger $passenger)
    {
        $request->validate([
            'Name' => 'required',
            'Surname' => 'required',
            'Birthday' => 'required',
        ], [
            'Name.required' => 'Il campo del nome è obbligatorio',
            'Surname.required' => 'Il campo del cognome è obbligatorio',
            'Birthday.required' => 'Il campo della data è obbligatorio',
        ]);

        $passenger->update($request->all());

        return redirect()->route('admin.passengers.index')->with('success', "Il passeggero $passenger->Name $passenger->Surname è stato modificato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passenger $passenger)
    {

        $passenger->delete();
        return redirect()->route('admin.passengers.index')->with('success', "Il passeggero $passenger->Name $passenger->Surname è stato eliminato");
    }
}
