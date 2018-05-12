@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Services</div>

                    <div class="card-body">
                        <form action="/invoice" method="post" class="form-horizontal">
                        @csrf
                        @include('invoice.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection