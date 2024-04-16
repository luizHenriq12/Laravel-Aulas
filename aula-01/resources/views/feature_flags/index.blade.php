<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Feature Flags</title>
</head>
<body>
    <h1>Gerenciamento de Feature Flags</h1>

    <table>
        <thead>
            <tr>
                <th>Chave</th>
                <th>Valor</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach($featureFlags as $flag)
            <tr>
                <td>{{ $flag->chave }}</td>
                <td>{{ $flag->valor ? 'Ativado' : 'Desativado' }}</td>
                <td>{{ $flag->descricao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
