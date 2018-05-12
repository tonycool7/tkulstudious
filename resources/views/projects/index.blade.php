@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="card-header">Projects</div>

                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>telephone</th>
                            <th>company</th>
                            <th>budget_from</th>
                            <th>budget_to</th>
                            <th>date</th>
                            <th>action</th>
                            </thead>
                            <tbody>
                            @forelse($projects as $item)
                                <tr>
                                    <td><a href="/project/{{$item->id}}">{{$item->id}}</a></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->telephone}}</td>
                                    <td>{{$item->company}}</td>
                                    <td>{{$item->budget_from}}</td>
                                    <td>{{$item->budget_to}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <form action="/project/{{$item->id}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {!! csrf_field() !!}
                                            <button><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">No projects.. sorry bruh</td>
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