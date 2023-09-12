<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Fornecedores</h3>

    {{--Aqui fica os comentários--}}
    @php 

    @endphp

    @isset($fornecedores)
        @php $i = 0 @endphp
        @while(isset($fornecedores[$i]))
            Fornecedor: {{ $fornecedores[$i]['nome'] }}
            <br>
            Status: {{ $fornecedores[$i]['status'] }}
            <br>
            CNPJ : {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
            <br>
            Telefone: ({{ $fornecedores[$i]['ddd'] ?? 'Dado não foi preenchido' }}) {{ $fornecedores[$i]['tel'] ?? 'Dado não foi preenchido' }}
            @php $i++ @endphp
            <hr>
        @endwhile
    @endisset


</body>
</html>