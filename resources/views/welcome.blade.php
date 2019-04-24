@extends('layouts.app')
@section('token')
    @if (isset($token))
        <meta name="token" content="{{ $token }}">
    @endif
@endsection
@section('content')
    <example-component></example-component>
@endsection