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
                    <div class="card-header">Services</div>

                    <div class="card-body">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <th>id</th>
                            <th>name</th>
                            <th>description</th>
                            <th>cost</th>
                            <th>duration</th>
                            <th>action</th>
                            </thead>
                            <tbody>
                            @forelse($services as $item)
                                <tr>
                                    <td><a href="/services/{{$item->id}}/edit">{{$item->id}}</a></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->cost}}</td>
                                    <td>{{$item->duration}}</td>
                                    <td>
                                        <form action="/services/{{$item->id}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {!! csrf_field() !!}
                                            <button><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">No services.. sorry bruh</td>
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