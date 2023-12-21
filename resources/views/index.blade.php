<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Dados</title>
</head>
<body>
    <h1>Lista de Usuários Aleatórios</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
                <tr>
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <div>
        <ul>
            @foreach ($dados as $item)
                <li>{{ $item['first_name'] }} {{ $item['last_name'] }}</li>
            @endforeach
        </ul> -->
    </div>
</body>
</html>

