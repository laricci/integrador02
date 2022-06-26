@extends('index')

@section('title', 'Fornecedores')

@section('filter')
    @include('fornecedor.filter')
@endsection

@section('table')
    @include('fornecedor.table')
@endsection

@section('modal')
    @include('fornecedor.modal')
@endsection

@section('script')
    @include('fornecedor.script')
@endsection
