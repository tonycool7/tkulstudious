<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpensesCategory;

class ExpensesCategoryController extends Controller
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
        $expensesCategories = ExpensesCategory::all();
        return view('expensesCategory.index', compact('expensesCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expensesCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ExpensesCategory::create($request->all());

        return redirect('/expenses_category')->with(['success' => 'Expense category added!']);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expensesCategory = ExpensesCategory::findOrFail($id);

        return view('expensesCategory.edit', compact('expensesCategory'));
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
        $expenses_category = ExpensesCategory::findorFail($id);

        $expenses_category->update($request->all());

        return redirect('/expenses_category')->with(['success' => 'expenses category updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expenses_category = ExpensesCategory::findorFail($id);

        $expenses_category->expenses()->delete();
        $expenses_category->destroy($id);

        return redirect()->back()->with(['success' => 'expenses category deleted!']);
    }
}
