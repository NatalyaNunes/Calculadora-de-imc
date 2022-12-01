@extends('templates.template_principal')

@section('titulo', 'Resultado')

@section('conteudo')

    <h3>O resultado do seu indice é: </h3>  
    <h1>{{ $imc }}</h1> 
    <hr>
    <h1>Você está com: 
    @if ($imc < 18.5 )
    <h1>Baixo peso!</h1>
    
    @elseif ($imc >= 18.5 && $imc <= 24.99)
    <h1>Peso normal!</h1>

    @elseif ($imc >= 25 && $imc < 29.99)
    <h1>Excesso de peso!</h1>

    @elseif ($imc >= 30 && $imc < 34.99)
    <h1>Obesidade Classe I! </h1>

    @elseif ($imc >= 35 && $imc < 39.99)
    <h1>Obesidade Classe II!</h1>

    @elseif ($imc > 40)
    <h1>Obesidade Mórbida!</h1>

    @endif
</h1>
    <a class="btn btn-primary" href="/">Voltar</a>

@endsection