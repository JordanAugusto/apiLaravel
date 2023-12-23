<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Listagem De Dados</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
    <h1>Lista De Usuários</h1>
    <table class="table table-striped table-hover" id="tabela-usuarios">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
                <th>Senha</th>
                <th>Ocupação Profissional</th>
                <th>Pais</th>
                <th>Cidade</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($dados as $usuarios)
                <tr scope="row">
                    <td>{{ $usuarios['id'] }}</td>
                    <td>{{ $usuarios['first_name'] . ' ' . $usuarios['last_name'] }}</td>
                    <td>{{ $usuarios['email'] }}</td>
                    <td>{{ $usuarios['phone_number'] }}</td>
                    <td>{{ date('d/m/Y', strtotime($usuarios['date_of_birth'])) }}</td>
                    <td>{{ $usuarios['password'] }}</td>
                    <td>{{ $usuarios['employment']['title']}}</td>
                    <td>{{ $usuarios['address']['country']}}</td>
                    <td>{{ $usuarios['address']['city']}}</td>
                    <td>
                    <img src="{{ $usuarios['avatar'] }}" style="width: 35px;" alt="{{ $usuarios['avatar'] }}">
                    </td>
                    <!-- @dump($usuarios); -->
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- configuraçao do datatable: -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabela-usuarios').DataTable({
                "stateSave": true,
                "language": {
                    "url": '//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json'
                }
            })
        });
    </script>
</body>
</html>

