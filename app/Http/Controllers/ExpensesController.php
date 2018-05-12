<?php

namespace App\Http\Controllers;

use App\Expenses;
use App\ExpensesCategory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ExpensesController extends Controller
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
        $expenses = Expenses::all();
        return view('expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expensesCategories = ExpensesCategory::all();
        return view('expenses.create', compact('expensesCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Expenses::create($request->all());

        return redirect('/expenses')->with(['success' => 'Expense added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function report(){
        $categories = ExpensesCategory::all();
        return view('expenses.report', compact('categories'));
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reportToPdf(Request $request)
    {
        if($request->category != "all"){
            $expenses = Expenses::whereBetween('created_at', [$request->from, $request->to])->where('category_id', '=', $request->category)->get();
        }else{
            $expenses = Expenses::whereBetween('created_at', [$request->from, $request->to])->get();
        }
        $pdf = PDF::loadView('expenses.reportPDF', ['expenses' => $expenses]);

        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expenses = Expenses::findOrFail($id);
        $expensesCategories = ExpensesCategory::all();

        return view('expenses.edit', compact('expenses', 'expensesCategories'));
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
        $expenses = Expenses::findorFail($id);

        $expenses->update($request->all());

        return redirect('/expenses')->with(['success' => 'expenses updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expenses = Expenses::findorFail($id);

        $expenses->destroy($id);

        return redirect()->back()->with(['success' => 'expenses deleted!']);
    }
}
