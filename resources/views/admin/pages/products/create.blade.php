@extends('admin.layouts.app')
@section('title', 'Cadastrar Novo Produto')
    


@section('content')
    <h1>Cadatrar Novo Produto!</h1>

<form action="{{ route('products.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Nome:">
        <button type="submit">Enviar</button>
    </form>
@endsection
