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

        .invoice-table table tr td{
            font-size: 20px;
            padding: 20px 0px 20px 0px;
        }

        .right{
            float: right;
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
        .invoice-conclusion{
            padding: 20px;
            height: 160px;
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
        <p class="invoice-name">Invoice</p>
    </div>
    <div class="col-4 company-details">
        <h3>+2349096111758</h3>
        <h3>tkulstudios@gmail.com</h3>
        <h3>tkulstudio@gmail.com</h3>
        <h3>tonykul.com</h3>
    </div>
    <div class="col-4 company-details">
        <p>F.C.T Abuja,<br> Nigeria</p>
    </div>
</header>
@php
    $subtotal = \App\Services::findMany(array_keys((array)json_decode($services)))->sum('cost_usd');
    $subtotal = \App\Services::findMany(array_keys((array)json_decode($services)))->sum('cost');
    $tax = $subtotal * .18;
    $total = $subtotal + $tax;
@endphp
<section class="user-details">
    <div class="col-4 user-details__descr">
        <h2>Billed To</h2>
        <h3>{{$client_name}}</h3>
        <h3>{{$address}}</h3>
        <h3>{{$city}}, {{$country}}</h3>
        <h3>{{$zip}}</h3>
    </div>
    <div class="col-4 user-details__descr">
        <h2>Invoice Number {{$id}}</h2>
        <h2>Invoice Number</h2>
        <h3>{{$id}}</h3>
        <h2>Date Of Issue</h2>
        <h3>{{$created_at}}</h3>
    </div>
    <div class="col-4 user-details__descr">
        <h2>Invoice Total</h2>
        <h4 class="total">${{$subtotal}}</h4>
    </div>
</section>

<hr class="line">
<section class="acc-details">
    {{--<h2>Account Details</h2>--}}
    {{--<table>--}}
        {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>Name</th>--}}
                {{--<th>Institution</th>--}}
                {{--<th>Account no</th>--}}
                {{--<th>Branch name</th>--}}
                {{--<th>Branch code</th>--}}
                {{--<th>Swift code</th>--}}
                {{--<th>Bank address</th>--}}
            {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--<tr>--}}
            {{--<td>FEMI - OKE GBOLAHAN</td>--}}
            {{--<td>UNITED BANK FOR AFRICA PLC</td>--}}
            {{--<td>3002420441</td>--}}
            {{--<td>ABUJA BRANCH</td>--}}
            {{--<td>114</td>--}}
            {{--<td>UNAFNGLA114</td>--}}
            {{--<td>AREA 3, GARKI, ABUJA</td>--}}
        {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
</section>
<hr class="line">

<section class="invoice-table">
    <table>
        <tr>
            <th>Description</th>
            <th>Unit cost</th>
            <th>Qty</th>
            <th>Amount</th>
        </tr>

        @foreach(\App\Services::findMany(array_keys((array)json_decode($services))) as $item)
            <tr>
                <td>{{$item->description}}</td>
                <td>{{$item->cost_usd}}</td>
                <td>1</td>
                <td>{{$item->cost_usd}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3">Subtotal: </td>
            <td>${!! $subtotal !!}.00</td>
        </tr>
        <tr>
            <td colspan="3">Amount Due:</td>
            <td>${{$subtotal}}.00</td>
        </tr>
    </table>
</section>

<section class="invoice-conclusion">
    <div class="col-4 right">
        <h3>Subtotal: $<span>{!! $subtotal !!}.00</span></h3>
        <h3>Tax: $<span>{{$tax}}</span></h3>
        <h3>Total: $<span>{{$total}}.00</span></h3>
        <h3>Amount Due: $<span>{{$total}}.00</span></h3>
    </div>
</section>

<section class="thanks-msg">
    <p>It was a pleasure working with you.</p>
</section>
</body>
</html>