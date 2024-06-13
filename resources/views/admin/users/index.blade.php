<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </table>
    <tbody>
        <tr>
            @forelse($users as $user)
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td></td>
            @empty
            <td colspan="100">Nenhum registro encontrado</td>
            @endforelse

        </tr>
    </tbody>
</body>
</html>
