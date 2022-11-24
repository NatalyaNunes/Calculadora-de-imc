<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado imc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <div class="container">
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
  
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>