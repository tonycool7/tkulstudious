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

        .project-title{
            font-size: 24px;
            padding: 10px;
        }

        .user-details__descr h2{
            color: #6c757d;
            font-size: 20px;
            line-height: 2;
        }

        .total{
            font-size: 30px;
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

        .project-descr{
            padding: 20px;
        }

        .project-descr p{
            font-size: 20px;
        }

        .invoice-table table{
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        .invoice-table table td{
            border: 1px solid black;
        }

        .invoice-table table th{
            border: 1px solid black;
            text-align: left;
            color: #6c757d;
            font-size: 24px;
            padding: 20px 5px;
        }

        .invoice-table table tr td{
            font-size: 20px;
            padding: 20px 5px;
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
        <p class="invoice-name">Project</p>
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
@php
    $workmanship = 30000;
    $subtotal = \App\Services::findMany(array_keys((array)json_decode($services)))->sum('cost_ng') + $workmanship;
    $tax = $subtotal * .18;
    $total = $subtotal + $tax;
@endphp
<section class="user-details">
    <div class="col-4 user-details__descr">
        <h2>Client</h2>
        <h3>{{$name}}</h3>
        <h3>{{$email}}</h3>
        <h3>{{$telephone}}</h3>
    </div>
    <div class="col-4 user-details__descr">
        <h2>Company</h2>
        <h3>{{$company}}</h3>
        <h2>Start Date</h2>
        <h3>{{$created_at}}</h3>
    </div>
    <div class="col-4 user-details__descr">
        <h2>Project Estimate</h2>
        <h4 class="total"> {{$subtotal}} Naira</h4>
    </div>
</section>

<hr class="line">
<section class="project-descr">
    <h3>Project Description</h3>
    <p>{{$description}}</p>
</section>

<hr class="line">
<section class="invoice-table">
    <h3 class="project-title">Estimate of project services and functions</h3>
    <table>
        <tr>
            <th>Service</th>
            <th>Description</th>
            <th>Cost (Naira)</th>
        </tr>

        @foreach(\App\Services::findMany(array_keys((array)json_decode($services))) as $item)
            <tr>
                <td>{{$item->question}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->cost_ng}}</td>
            </tr>
        @endforeach
        <tr>
            <td>Workmanship</td>
            <td>Cost of implementing the design, realizing login and registration, security etc</td>
            <td>{{$workmanship}}</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;">
                Estimated cost:
            </td>
            <td>{{$subtotal}}.00 Naira</td>
        </tr>
    </table>
</section>

<section class="thanks-msg">
    <p>Looking forward to working with you. Let's make this idea a reality.</p>
</section>
</body>
</html>