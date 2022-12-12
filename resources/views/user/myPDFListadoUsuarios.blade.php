<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Usuarios</title>
    <style>
        td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<img src="../public/assets/img/logo/LOGOR_page-0001.jpg" alt="logo" style="height: 90px; text-align: center">
<h1>Listado Usuarios</h1>
<table style="border: 1px solid black;text-align: center;width: 100%">
    <thead>
    <tr><th>ID</th><th>Nombre</th> <th>Apellidos</th> <th>Email</th> <th>Rol</th> </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->surname}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->roles->first()->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
