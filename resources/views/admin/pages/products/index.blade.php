@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>Exibindo os produtos</h1>

    @if ($teste === '1223')
        É IGUAL
    @elseif ($teste == 1223)
     É IGUAL A 1223
    @else
        é diferente  
    @endif 

    @unless ($teste === '1223')
        teste1
    @else
        teste2
    @endunless

    @isset($teste)
        <p>ela existe</p>
    @endisset

    @empty($teste3)
    <p>vazioo...</p>    
    @endempty

    @auth 
        <p>Está logado!</p>
    @else 
        <p>Não está logado!</p>
    @endauth

    @guest
        <p> Não está autenticado!</p>   
    @endguest



@endsection
