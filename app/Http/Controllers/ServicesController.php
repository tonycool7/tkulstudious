<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'can:access-admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();

        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Services::create($request->all());

        return redirect('/services')->with(['success' => 'Service added!']);
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
        $service = Services::findOrFail($id);

        return view('services.edit', compact('service'));
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
        $service = Services::findorFail($id);

        $service->update($request->all());

        return redirect('/services')->with(['success' => 'Service updated!']);
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::findorFail($id);

        $service->destroy($id);

        return redirect()->back()->with(['success' => 'Service deleted!']);
    }
}
