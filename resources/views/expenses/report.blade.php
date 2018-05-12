@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Report</div>

                    <div class="card-body">
                        <form action="/expenses/report" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">From</label>
                                <input class="form-control" name="from" type="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">to</label>
                                <input class="form-control" name="to" type="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select name="category" class="form-control" id="categories">
                                    <option value="all">All</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn-primary">Show PDF</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection