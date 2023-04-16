<?php

namespace App\Http\Controllers;

use App\Models\Capitan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CapitanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capitans = Capitan::paginate(5);
        return view('admin.capitans.index', compact('capitans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.capitans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_capitan = Capitan::create($data);

        return redirect()->route('admin.capitans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function show(Capitan $capitan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function edit(Capitan $capitan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Capitan $capitan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Capitan  $capitan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capitan $capitan)
    {
        $capitan->delete();

        return back();
    }
}
