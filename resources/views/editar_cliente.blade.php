<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
<form action="/editar_cliente/{{$cliente->id}}" method="post">
    @csrf
    {{ method_field("PUT")}}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$cliente->name}}">

    <label for="matricula">CPF</label>
    <input type="text" name="cpf" value="{{$cliente->cpf}}">

    <label for="comissao">E-mail</label>
    <input type="text" name="email" value="{{$cliente->email}}">

    <input type="submit" value="Salvar">
</form>
</body>
</html>