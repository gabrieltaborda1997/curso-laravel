@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>Exibindo os produtos</h1>
<a href={{ route('products.create') }}>Cadastrar</a>

    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>

    @if (isset($products))
        @foreach ($products as $product)
        
            <p class="@if ($loop->last) last @endif">{{ $product }}</p>
        @endforeach
    @endif

    <hr>

    @forelse ($products as $product)
    <p class="@if ($loop->first) last @endif">{{ $product }}</p>
    @empty
        <p>Não existem produtos cadastrados.</p>
    @endforelse

    <hr>

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

@push('style')
<style>
    .last {
        background: black;
        color: white;
    }
</style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = "#efefef"
    </script>
@endpush
