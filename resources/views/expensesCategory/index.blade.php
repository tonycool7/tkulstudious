@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="card-header">Expenses Categories</div>

                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>id</th>
                                <th>name</th>
                                <th>description</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                            @forelse($expensesCategories as $item)
                                <tr>
                                    <td><a href="/expenses_category/{{$item->id}}/edit" title="Edit Expense category">{{$item->id}}</a></td>
                                    <td><a href="/expenses_category/{{$item->id}}/edit" title="Edit Expense category">{{$item->name}}</a></td>
                                    <td>{{$item->description}}</td>
                                    <td>
                                        <form action="/expenses_category/{{$item->id}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {!! csrf_field() !!}
                                            <button><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No categories available.. sorry bruh</td>
                                </tr>
                            @endforelse
                            <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection