<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::paginate(5);

        return view('admin.flights.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $passenger = Passenger::find($id);
        $flights = Passenger::find($id)->flights;
        
        $flightsOff = Flight::whereDoesntHave('passengers', function (Builder $query) use ($id){
            $query->where('passenger_id', $id);
        })->get();

        return view('admin.flights.show', compact('flights', 'passenger','flightsOff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }


    public function detachFlight($flight_id, $passenger_id)
    {

        $passenger = Passenger::findOrFail($passenger_id);
        $passenger->flights()->detach($flight_id);

        return back();
    }

    public function detachFlightAll($passenger_id)
    {

        $passenger = Passenger::findOrFail($passenger_id);
        $passenger->flights()->detach();

        return back();
    }

    public function addFlight(Request $request)
    {
        $passenger = Passenger::findOrFail($request->passenger_id);
        $passenger->flights()->attach($request->flight_id);

        return back();
    }
}
