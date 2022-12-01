@extends('templates.template_principal')

@section('titulo', 'Formulario')

@section('conteudo')
        <h1>Calculadora de IMC</h1>
    <form action="/calcular"method="post">
        {{ csrf_field() }}
        <div class="mb-3">
        <label for="peso" class="form-label">Peso:</label>
        <input type="text" step="0.1" name="peso" class="form-control" id="peso" >
        </div>
        <div class="mb-3">
        <label for="altura" class="form-label">Altura:</label>
        <input type="text" name="altura" class="form-control" id="altura">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
       </form>
@endsection