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
                    <div class="card-header">Invoices</div>

                    <div class="card-body">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                                <th>id</th>
                                <th>name</th>
                                <th>description</th>
                                <th>country</th>
                                <th>city</th>
                                <th>address</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                            @forelse($invoices as $item)
                                <tr>
                                    <td><a href="/invoice/{{$item->id}}/edit">{{$item->id}}</a></td>
                                    <td><a href="/invoice/{{$item->id}}">{{$item->client_name}}</a></td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->country}}</td>
                                    <td>{{$item->city}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>
                                        <form action="/invoice/{{$item->id}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {!! csrf_field() !!}
                                            <button><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">No invoices.. sorry bruh</td>
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