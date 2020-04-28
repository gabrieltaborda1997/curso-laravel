@extends('admin.layouts.app')
@section('title', 'Cadastrar Novo Produto')
    


@section('content')
    <h1>Cadatrar Novo Produto!</h1>

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
@endsection
