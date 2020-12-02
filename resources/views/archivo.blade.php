@extends('layouts.master')
@section('title','Plantillas con Blade')
@section('header')
    <h1>Mi página</h1>
@stop
@section('navbar')
    <ul>
        <li><a href="{{route('trapecio')}}">1.1</a> </li>
        <li><a href="{{route('apotema')}}">1.2</a> </li>
        <li><a href="{{route('volumen')}}">1.3</a> </li>
        <li><a href="{{route('triangulo')}}">1.4</a> </li>
        <li><a href="{{route('circunferencia')}}">1.5</a> </li>
        <li><a href="{{route('votacion')}}">2.1</a> </li>
        <li><a href="{{route('pago')}}">2.2</a> </li>
        <li><a href="{{route('febrero')}}">2.3</a> </li>
        <li><a href="{{route('estacionamiento')}}">2.4</a> </li>
        <li><a href="{{route('calificacion')}}">2.5</a> </li>
        <li><a href="{{route('salarios')}}">3.1</a> </li>
        <li><a href="{{route('numeros',[
    'num1'=>10
])}}">3.2</a> </li>
        <li><a href="{{route('registradora',[
    'num1'=>10
])}}">3.3</a> </li>
        <li><a href="{{route('aprobados',[
    'num1'=>10
])}}">3.4</a> </li>
        <li><a href="{{route('tabla',[
    'num1'=>10
])}}">3.5</a> </li>
    </ul>
@stop
@section('content')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
@stop
@section('footer')
    Derechos reservados {{date('Y')}}
@stop