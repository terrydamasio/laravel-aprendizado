<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Principal</h3>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('site.index') }}">Principal</a>
                </li>
                <li>
                    <a href="{{ route('site.sobrenos') }}">Sobre Nos</a>
                </li>
                <li>
                    <a href="{{ route('site.contato') }}">Contato</a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>