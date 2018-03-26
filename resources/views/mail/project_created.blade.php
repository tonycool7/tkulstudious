@extends('layouts.mail')

@section('content')
    <h2>Hello! {{$project->name}}</h2>
    <h2>Your request for a project was received. We will contact you as soon as possible for further inquiries.<br/> Have a nice one.</h2>
    <p style="font-size: 14pt; color: black; text-align: center;">Please contact us if the need arises</p>
    <h4 style="font-size: 14pt; color: #beaa8c; text-align: center;">tkulstudios@gmail.com</h4>
    <h4 style="font-size: 14pt; color: #beaa8c; text-align: center;">+2349096111758</h4>
@endsection