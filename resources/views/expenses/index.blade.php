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
                    <div class="card-header">expenses</div>

                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>id</th>
                                <th>name</th>
                                <th>category</th>
                                <th>cost</th>
                                <th>unit</th>
                                <th>qty</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @forelse($expenses as $item)
                                <tr>
                                    <td><a href="/expenses/{{$item->id}}/edit" title="Edit Expense">{{$item->id}}</a></td>
                                    <td><a href="/expenses/{{$item->id}}/edit" title="Edit Expense">{{$item->name}}</a></td>
                                    <td>{{$item->category->name}}</td>
                                    <td>{{$item->cost}}</td>
                                    <td>{{$item->unit}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>
                                        <form action="/expenses/{{$item->id}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {!! csrf_field() !!}
                                            <button><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No expenses.. sorry bruh</td>
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