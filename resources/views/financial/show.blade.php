@extends('layouts.master')


@section('content')

    <h1>Name: {{$clients->client_name}}</h1>
    <p> Email: {{$clients->client_email}}</p>
    <p>Phone: {{$clients->client_phone}}</p>
    <p>Address:{{$clients->client_address}}</p>
    <p>Status: {{$clients->client_status}}</p>
    <p>Type: {{$clients->client_type}}</p>

    <a href="{{route('clients.index')}}" class="btn btn-success">Go back</a>


@endsection
