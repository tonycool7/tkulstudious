<?php

namespace App\Http\Controllers;

use App\Invoices;
use App\Services;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoices::all();
        return view('invoice.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services::all();
        return view('invoice.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = Services::all()->pluck('name')->toArray();
        $invoiceData = $request->all();

        $invoiceJson = json_encode(array_intersect(array_flip($invoiceData), $services));
        $invoiceData['services'] = $invoiceJson;

        Invoices::create($invoiceData);

        return redirect('/invoice')->with(['success' => 'Inovice added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoices::findOrFail($id);
        $pdf = PDF::loadView('invoice.show', $invoice);

        return $pdf->stream();
//        return view('invoice.invoice')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoices::findOrFail($id);
        $services = Services::all();


        return view('invoice.edit', compact('invoice', 'services'));
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
        $invoice = Invoices::findorFail($id);

        $services = Services::all()->pluck('name')->toArray();
        $invoiceData = $request->all();

        $invoiceJson = json_encode(array_intersect(array_flip($invoiceData), $services));
        $invoiceData['services'] = $invoiceJson;

        $invoice->update($invoiceData);

        return redirect('/invoice')->with(['success' => 'Invoice updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoices::findorFail($id);

        $invoice->destroy($id);

        return redirect()->back()->with(['success' => 'Invoice deleted!']);
    }
}
