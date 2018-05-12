<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

        h2,h3,h4{
            margin: 0px;
        }
        html, body{
            margin: 0px;
            padding: 0px;
        }
        .col-4{
            padding: 20px;
            width: 33.3%;
            float: left;
            box-sizing: border-box;
        }

        .invoice-header{
            width: 100%;
            background-color: #0c5460;
            height: 200px;
        }

        .user-details{
            width: 100%;
            height: 200px;
        }

        .company-name{
            color: white;
        }

        .company-details h3{
            color: white;
            line-height: 2;
        }

        .company-details p{
            color: white;
        }

        .user-details__descr h2{
            color: #6c757d;
            font-size: 20px;
            line-height: 2;
        }

        .total{
            font-size: 50px;
            color: #5a6268;
        }

        .invoice-name{
            margin: 0px;
            color: white;
            font-size: 80px;
            display: block;
        }

        .invoice-table{
            padding: 20px;
        }

        .invoice-table table{
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
        }

        .invoice-table table th{
            text-align: left;
            color: #6c757d;
            font-size: 24px;
            border: 1px solid black;
            padding: 5px;
        }

        .invoice-table table tr td{
            border: 1px solid black;
            font-size: 20px;
            padding: 10px;
        }

        .right h3{
            text-align: center;
            font-size: 20px;
            line-height: 1.5;
        }
        .line{
            margin-left: 20px;
            margin-right: 20px;
        }

        .acc-details{
            padding: 20px;
        }

        .acc-details h2{
            margin: 0px;
        }

        .acc-details table{
            border: 1px solid black;
            border-collapse: collapse;
        }

        .acc-details table tr td, .acc-details table tr th{
            border: 1px solid black;
        }

        .thanks-msg{
            padding: 20px;
        }

        .thanks-msg p{
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<header class="invoice-header">
    <div class="col-4">
        <h2 class="company-name">Tkulstudios</h2>
        <p class="invoice-name">Expenses</p>
    </div>
    <div class="col-4 company-details">
        <h3>+2349096111758</h3>
        <h3>tkulstudios@gmail.com</h3>
        <h3>tonykul.com</h3>
    </div>
    <div class="col-4 company-details">
        <p>F.C.T Abuja,<br> Nigeria</p>
    </div>
</header>

{{--<section class="user-details">--}}
    {{--<div class="col-4 user-details__descr">--}}
        {{--<h2>Billed To</h2>--}}
        {{--<h3>{{$client_name}}</h3>--}}
        {{--<h3>{{$address}}</h3>--}}
        {{--<h3>{{$city}}, {{$country}}</h3>--}}
        {{--<h3>{{$zip}}</h3>--}}
    {{--</div>--}}
    {{--<div class="col-4 user-details__descr">--}}
        {{--<h2>Invoice Number {{$id}}</h2>--}}
        {{--<h2>Date Of Issue</h2>--}}
        {{--<h3>{{$created_at}}</h3>--}}
    {{--</div>--}}
    {{--<div class="col-4 user-details__descr">--}}
        {{--<h2>Invoice Total</h2>--}}
        {{--<h4 class="total">${{$subtotal}}</h4>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<hr class="line">--}}
@php
    $sum = 0;
@endphp
<section class="invoice-table">
    <table>
        <tr>
            <th>Name</th>
            <th>Qty</th>
            <th>Unit</th>
            <th>Category</th>
            <th>Cost</th>
            <th>Total</th>
        </tr>

        @foreach($expenses as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->unit}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->cost}}</td>
                <td>{{$item->cost * ($item->qty ?? 1)}}</td>
            </tr>
            @php
                $sum += $item->cost * ($item->qty ?? 1);
            @endphp
        @endforeach
        <tr>
            <td colspan="5" class="right">Subtotal: </td>
            <td>{{$sum}}</td>
        </tr>
    </table>
</section>

<section class="thanks-msg">
    <p>Manage your expenses!.</p>
</section>
</body>
</html>