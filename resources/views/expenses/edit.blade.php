@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Services</div>

                    <div class="card-body">
                        <form action="/expenses/{{$expenses->id}}" method="post" class="form-horizontal">
                            <input name="_method" type="hidden" value="PUT">
                            @csrf
                            @include('expenses.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection