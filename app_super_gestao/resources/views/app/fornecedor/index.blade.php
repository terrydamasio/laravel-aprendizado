<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Fornecedores</h3>

    @isset($fornecedores)
        @forelse ($fornecedores as $indice => $fornecedor)
            Iteração atual: {{ $loop->iteration}}
            <br>
            Fornecedor: {{ $fornecedor['nome'] }}
            <br>
            Status: {{ $fornecedor['status'] }}
            <br>
            CNPJ : {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
            <br>
            Telefone: ({{ $fornecedor['ddd'] ?? 'Dado não foi preenchido' }}) {{ $fornecedor['tel'] ?? 'Dado não foi preenchido' }}
            <br>
            @if($loop->first)
                Primeira iteração do loop
            @endif
            
            @if($loop->last)
                Ultima iteração do loop
                <br>
            @endif
            <hr>
            Total de registros: {{ $loop->count }}
            @empty
                Não existem fornecedores cadastrados!
        @endforelse
        
    @endisset


</body>
</html>