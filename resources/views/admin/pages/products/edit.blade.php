@extends('admin.layouts.app')
@section('title', 'Editar Produto')
    


@section('content')
<h1>Editar Produto: {{ $id }}</h1>

<form action="{{ route('products.update', $id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Nome:">
        <button type="submit">Enviar</button>
    </form>
@endsection
