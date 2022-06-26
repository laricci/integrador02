@extends('index')

@section('title', 'Clientes')

@section('filter')
    @include('cliente.filter')
@endsection

@section('table')
    @include('cliente.table')
@endsection

@section('modal')
    @include('cliente.modal')
@endsection

@section('script')
    @include('cliente.script')
@endsection
